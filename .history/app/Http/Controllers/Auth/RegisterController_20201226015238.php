<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Person;
use App\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{    /**
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

            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

        ]);
    }

    public function showform($id)
    {
        
        $data = Person::where('id',$id)->first();
        session()->flash('success', 'Your email was verified. Now you can continue your registration!');
        return view('auth.registerbis')->with(compact('data'))->with('success');
    }
    protected function createUser(array $data)
    {
        
        if( $data['status'] == 0 )
        {
            $nbr = User::count();
            $user = User::create([
            'id' => ++$nbr,
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'class' => $data['class'],
            'phone' => $data['tel'],
            'address' => $data['address'],
            'person_id' => $data['code'],
            
            ]);
            if ($data['image'])
        {
            $file = $data['image'];
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/members/',$filename);
            $user->image = $filename;
        }
        else
        {
            $user->image = '';
        }
        $user->save();
        return $user;
  
        }
    }
    protected function createAdmin(array $data)
    {
        
        if( $data['status'] == 1 )
        {
            $nbr = Admin::count();
            return Admin::create([
                'id' => ++$nbr,
                'firstname' => $data['firstname'],
                'lastname' => $data['lastname'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'person_id' => $data['code'],
                
                ]);
        }
    }

    public function register(Request $request)
    {
        $validation = $this->validator($request->all());
        if ($validation->fails())  {
            session()->flash('danger', 'Please verify the data you entered! Your password must to have at least 8 characters!');
            return redirect()->back()->with(['errors'=>$validation->errors()->toArray()]);
        }
        else{
            $user = $this->createUser($request->all());
            $admin = $this->createAdmin($request->all());
            if(  $user )
            {
                session()->flash('success', 'Successfully Registered! Now you have to log in!');
                return redirect()->route('Userlogin1')->withInput(); 
            }
            else if( $admin )
            {
                session()->flash('success', 'Successfully Registered! Now you have to log in!');
                return redirect()->route('Adminlogin1')->withInput();
            }
            else
            {
                session()->flash('error', 'An error occured! Please try again!');
                return redirect()->route('register1')->withInput();
            }
             
            
        }
    }
}

