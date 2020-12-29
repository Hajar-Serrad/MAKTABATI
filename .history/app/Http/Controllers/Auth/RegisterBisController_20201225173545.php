<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Person;
use App\User;
use App\Admin;

use Illuminate\Support\Facades\Validator;

class RegisterBisController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:admin');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);
    }

    public function showfirstform()
    {
        return view('auth.register');
    }

    protected function verify(Request $request)
    {
        if( Person::where('email', $request->input('email'))->exists() )    
        {
           
            if( User::where('email', $request->input('email'))->exists() )
            {
                
                return true;
            }
            elseif( Admin::where('email', $request->input('email'))->exists() )
            {
                return false;
            }
            else
            { 
                $data = Person::whereEmail($request->email)->first();
                return $data;
            }
        }    
        else
        {
            return NULL;
            
        }
     
        
    }

    public function register(Request $request)
    {
        $validation = $this->validator($request->all());
        if ($validation->fails())  {
            return redirect()->back()->with(['errors'=>$validation->errors()->toArray()]);
        }
        else{
            $data = $this->verify($request);
            if( $data === true )
            {
                session()->flash('error', 'This email has already an account! Try to login!');
                return redirect()->route('Adminlogin1')->withInput();
            }
            elseif( $data === false )
            {
                session()->flash('error', 'This email has already an account! Try to login!');
                return redirect()->route('Userlogin1')->withInput();
            }
            elseif( $data == NULL )
            {
                session()->flash('error',
                "This email is incorrect! \nIf you don't have a student or professor email you can't access the site!"); 
                return redirect()->route('register1')->withInput();
            }
            else
            {
                return view('auth.registerbis')->with(compact('data'));
            }
             
        }
    }
}
