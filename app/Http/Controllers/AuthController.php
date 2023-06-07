<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            if (auth()->user()->roles == 'admin') {
                return redirect('/dashboard');
            } else if (auth()->user()->roles == 'peserta') {
                return redirect('/peserta');
            }
        }

        return back()->withErrors([
            'password' => 'Username atau password Anda salah',
        ]);
    }


    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
