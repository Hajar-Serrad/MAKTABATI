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
        //print_r($users[3]);
        //$users->get(0)->username;
        //echo count($users);
        for($i=1; $i<4; $i++) { 
            //$n1 = Borrowing::count();
            //$n2 = Borrowing::count();
            $users[$i]->push('n1','gggggjjjjjjjjjjjjjjjjjjjjgggggggggg');
            $users[$i]->save();
        }
        print_r($users[2]);
        //$users = $users::add();
        //$borrowings1 = Borrowing::all();
        //$borrowings2 = Borrowing_History::all();
        
        /*foreach ($users as $user) {
            $n1 = Borrowing::where('user_id','=',$user->person_id)->count();
            $n2 = Borrowing::where('user_id','=',$user->person_id)->count();
            $array['id'] = $n1;
            //$array['n1'] = $n1;
            //$array['n2'] = $user->n2;

            
        }
        //$users['n'] = $n1+$n2;*/
        
        //return view('member',compact('users','array'));
    }
}
