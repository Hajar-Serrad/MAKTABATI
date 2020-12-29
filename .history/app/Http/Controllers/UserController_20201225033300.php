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
        $borrowings1 = Borrowing::all();
        $borrowings2 = Borrowing_History::all();
        return view('member',compact('users','borrowings1','borrowings2'));
    }
}
