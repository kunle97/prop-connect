<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function loginView()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        //authenticates user for dashboard use
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('/dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
    public function registerView()
    {
        return view('register');
    }
    public function register(Request $request)
    {
        //Registers user via POST
        $user = new User();
        $user->name = $request['first_name'] . ' ' . $request['last_name'];
        $user->email = $request['email'];
        $user->account_type = "landlord";
        $pw = $request['password'];
        $pw2 = $request['password_repeat'];

        if ($pw ===  $pw2) {
            $user->password = bcrypt($pw);
            if ($user->save()) {
                return redirect('/dashboard');
            } else {
                return redirect()->back();
            }
        }
        return;
    }
    public function forgotPasswordView()
    {
        return view('forgot-password');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/dashboard/login');
    }

    public function updateBasicInfo(Request $request)
    { //handles Updates to users name and email
        $name = $request['name'];
        $email = $request['email'];
        $user =  User::findOrFail(Auth::User()->id);

        $user->name = $name;
        $user->email = $email;

        if ($user->update()) {
            return redirect()->back();
        }
    }
}
