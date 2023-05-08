<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function auth(Request $request)
    {
        // validasi inputan
        $validated = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        // cek apakah data valid
        if (Auth::attempt($validated)) {
            // cek apakah status user active
            if (Auth::user()->status != 'active') {
                return redirect('/login')->with('failed', 'Your account is not active yet, please contact admin!');
            }

            // cek apakah rolenya admin
            if (Auth::user()->role_id == 1) {
                return redirect('dashboard');
            }

            // jika rolenya client
            return redirect('profile');
        }

        return redirect('/login')->with('failed', 'Username or Password Invalid!');
    }
}
