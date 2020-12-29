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
        $n = User::count();
        $array = array(['id' => 'val1', 'n1' => 'val2', 'n2' => 'val3']);
        for($i=0; $i<$n; $i++) { 
            $array[$i]['id'] = $users[$i]->id;
            $array[$i]['n1'] = Borrowing::where('user_id','=',$users[$i]->id)->count();
            $array[$i]['n2'] = Borrowing::where('user_id','=',$users[$i]->id)->count() + 
                               Borrowing_History::where('user_id','=',$users[$i]->id)->count();

        }
        return view('member',compact('users','array','n'));
    }

    public function profile()
    {
        $users = User::all();  
    }

}
