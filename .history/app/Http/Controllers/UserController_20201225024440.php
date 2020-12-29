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
        $var1 = User::all();
        $var2 = Borrowing::all();
        $var3 = Borrowing_History::all();
        return view('borrowing',compact('var1','var2','var3'));
    }
}
