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
        $data = ['title' => 'Welcome to ItSolutionStuff.com'];
        $pdf = PDF::loadView('myPDF', compact('borrowings','users'));
        return $pdf->download('Latecomers.pdf');
       
    }
}
