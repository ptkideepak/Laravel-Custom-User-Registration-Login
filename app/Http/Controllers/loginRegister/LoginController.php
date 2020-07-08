<?php

namespace App\Http\Controllers\loginRegister;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function login()
    {

        return view('loginRegister.login');
    }

    public function authenticate(Request $request)
    {

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('home');
        }

        return redirect('login')->with('error', 'Credentials are invalid.');
    }

    public function logout() {
        Auth::logout();

        return redirect('login');
    }

}
