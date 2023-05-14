<?php

namespace App\Http\Controllers;

use App\Models\User;
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
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                
                return redirect('/login')->with('failed', 'Your account is not active yet, please contact admin!');
            }

            $request->session()->regenerate();

            // cek apakah rolenya admin
            if (Auth::user()->role_id == 1) {
                return redirect('dashboard');
            }

            // jika rolenya client
            return redirect('profile');
        }

        return redirect('/login')->with('failed', 'Username or Password Invalid!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('login'));
    }

    public function register()
    {
        return view('register.register');
    }

    public function authRegis(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|max:100|unique:users,username',
            'password' => 'required|max:20',
            'phone' => 'max:25',
            'address' => 'required|max:200'
        ]);

        $validated['password'] = bcrypt($request->password);
        User::create($validated);

        return redirect(route('indexRegister'))->with('success', 'Registration is successful, wait until the admin approves the account');
    }
}
