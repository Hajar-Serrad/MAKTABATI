<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\User;
use App\Borrowing;
use Carbon\Carbon;

class PDFController extends Controller
{
    //
    public function generatePDF()
    {
        $borrowings = Borrowing::where('must_be_returned_at','<',Carbon::now('Africa/Casablanca'))->get();
        $users = User::all();

        $pdf = PDF::loadView('myPDF', $borrowings, $users);
        return $pdf->download('C:/Users/bousfiha/Downloads/Latecomers.pdf');
       
    }
}
