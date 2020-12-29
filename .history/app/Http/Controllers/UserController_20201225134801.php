<?php

namespace App\Http\Controllers;
use App\Borrowing;
use App\User;
use App\Borrowing_History;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        $users = User::all();
        $array = array(['id' => 'val1', 'n1' => 'val2', 'n2' => 'val3']);
        for($i=0; $i<4; $i++) { 
            $array[$i]['id'] = $users[$i]->id;
            $array[$i]['n1'] = Borrowing::where('user_id','=',$users[$i]->id)->count();
            $array[$i]['n2'] = Borrowing::where('user_id','=',$users[$i]->id)->count() + 
                               Borrowing_History::where('user_id','=',$users[$i]->id)->count();

        }
        return view('member',compact('users','array'));
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
        $borrowing_history->returned_at	= self::DATE;
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
