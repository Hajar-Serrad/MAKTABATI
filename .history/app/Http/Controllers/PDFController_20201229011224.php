<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\User;
use App\Borrowing;

class PDFController extends Controller
{
    //
    public function generatePDF()
    {
        $borrowings = Borrowing::where('must_be_returned_at','<',Carbon::now('Africa/Casablanca'))->get();
        foreach($borrowings as $borrowing)
        {
            $user = User::where('id','=',$borrowing->user_id)->distinct()->first();
            file_put_contents('C:\Users\Administrateur\Desktop\CollectEmails.txt',$user->email);  
            // crée le fichier collectEmails.txt s'il n'existe pas dans le répertoire (C:\Users\Administrateur\Desktop\) 
            // et met dedans les mails des personnes qui doivent immediatement retourner leurs emprunts    
        }

        $pdf = PDF::loadView('myPDF', $data);
  
        return $pdf->download('Latecomers.pdf');
    }
}
