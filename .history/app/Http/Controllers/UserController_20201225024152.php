<?php

namespace App\Http\Controllers;
use App\Borrowing;
use App\User;
use App\Person;
use App\Borrowing_History;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        $members = User::all();
        return view('borrowing',compact('members'));
    }
}
