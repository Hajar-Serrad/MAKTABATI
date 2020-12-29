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
        $borrowings = Borrowing::where('must_be_returned_at'->isoFormat('MMMM Do YYYY'),'<',Carbon::now('Africa/Casablanca')->isoFormat('MMMM Do YYYY'))->get();
        $users = User::all();

        $pdf = PDF::loadView('myPDF', $borrowings, $users);
  
        return $pdf->download('Latecomers.pdf');
    }
}
