<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    

    public function __construct()
    {
        $this->middleware('guest')->except(['logout', 'userLogout']);
        $this->middleware('guest:admin')->except(['logout', 'adminLogout']);
    }
    
    
    public function showAdminLoginForm()
    {
        return view('authAdmin.login', ['url' => '/login/admin']);
    }

    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:8'
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/admin/dashboard');
        }
        session()->flash('error', 'Your email or password is incorrect! Please try again!');
        return back()->withInput();
    }

    public function showUserLoginForm()
    {
        return view('auth.login', ['url' => '/user/login']);
    }

    public function userLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:8'
        ]);

        if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/user/dashboard');
        }
         session()->flash('error', 'Your email or password is incorrect! Please try again!');
         return back()->withInput();
    }

public function userLogout(Request $request)
    {
        Auth::guard('web')->logout();
        session()->flash('message', 'You have been logged out!');
        return redirect()->route('welcome')->withInput();
    }

    public function adminLogout(Request $request)
    {
        Auth::guard('admin')->logout();
        session()->flash('message', 'You have been logged out!');
        return redirect()->route('welcome')->withInput();
    }

 
}