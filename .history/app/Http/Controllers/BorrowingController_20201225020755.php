<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Borrowing;
use App\Book;
use App\Copy;
use App\User;
use App\Borrowing_History;
use Illuminate\Http\Request;



class BorrowingController extends Controller
{

    private $date = Carbon::now('Africa/Casablanca');
    public function index()
    {
        $borrowings = Borrowing::all();
        return view('borrowing',compact('borrowings'));
    }

    public function borrow(Request $request)
    {
        
        $nbr = Borrowing::where('user_id','=',$request->id)->count();
        $number = Borrowing::where('user_id','=',$request->id)->where('ISBN','=',$request->ISBN)->count();
        if($number)
        {
            session()->flash('error', 'You have a copy of this book in your possession right now, 
            if you don\'t return it you cannot borrow another!');
            return redirect()->back()->withInput();
        }
        if($nbr == 3)
        {
            session()->flash('error', 'You have reached the maximum number of books you can borrow! 
            Return the books in your possession so that you can borrow other books!');
            return redirect()->back()->withInput();
        }
        $copy = Copy::where('ISBN','=',$request->ISBN)->where('editor','=',$request->editor)->where('available','=',1)->first();
        $borrowing = new Borrowing([
            'ISBN' => $request->get('ISBN'),
            'user_id' => $request->get('id'),
            
        ]);
        
        $borrowing->copy_nbr = $copy->copy_nbr;
        $borrowing->borrowed_at =  $this->date;
        $borrowing->must_be_returned_at =  $date->addDay(15);
        
        $borrowing->save();
        $copy->available = false;
        $copy->save();
        $book = Book::where('ISBN','=',$request->ISBN)->first();
        $copy_copy = Copy::where('ISBN','=',$request->ISBN)->where('copy_nbr','=',$copy->copy_nbr)->first();
        $message = 'You requested to borrow  "'.$book->title.'"  edition  "'.$copy_copy->editor.'"  on  "' 
        .$borrowing->borrowed_at.'". Your borrowing is confirmed. Please be at the library as soon as possible to pick up your book. 
        The last deadline to return it is  "'.$borrowing->must_be_returned_at.
        '".  Please take care of it so that other students can benefit too ';
        session()->flash('success',$message);
        return redirect()->back()->withInput();
    }

    public function collect()
    {
        $date = Carbon::now('Africa/Casablanca');
        $borrowing1 = Borrowing::where('must_be_returned_at','<',$date->addDays(1));
        $borrowing2 = Borrowing::where('must_be_returned_at','<',$date->addDays(2));
        $borrowings = Borrowing::where('must_be_returned_at','<',$date)
                                ->union($borrowing1)->union($borrowing2)->get();
        foreach($borrowings as $borrowing)
        {
            $user = User::where('id','=',$borrowing->user_id)->distinct()->first();
            file_put_contents('C:\Users\Administrateur\Desktop\CollectEmails.txt',$user->email);  
            // crée le fichier collectEmails.txt s'il n'existe pas dans le répertoire (C:\Users\Administrateur\Desktop\) 
            // et met dedans les mails des personnes qui doivent immediatement retourner leurs emprunts    
        }
        session()->flash('success','Emails collected');
        return redirect()->back()->withInput();

    }

 
    
    public function destroy($nbr)
    {
        $id = --$nbr;
        $borrowings = Borrowing::all();
        $borrowing_history = new Borrowing_History;
        $borrowing_history->user_id = $borrowings[$id]->user_id;
        $borrowing_history->ISBN = $borrowings[$id]->ISBN;
        $borrowing_history->copy_nbr = $borrowings[$id]->copy_nbr;
        $borrowing_history->borrowed_at = $borrowings[$id]->borrowed_at;
        $borrowing_history->must_be_returned_at	= $borrowings[$id]->must_be_returned_at;
        $borrowing_history->returned_at	= Carbon::now('Africa/Casablanca');
        $borrowing_history->save();
        $ISBN = $borrowings[$id]->ISBN;
        $copy_nbr = $borrowings[$id]->copy_nbr;
        $copy = Copy::where('ISBN','=',$ISBN)->where('copy_nbr','=',$copy_nbr)->first();
        $copy->available = 1;
        $copy->save();
        $borrowings[$id]->delete();
        return redirect()->back()->with('success', 'Borrowing deleted!');

    }
}
