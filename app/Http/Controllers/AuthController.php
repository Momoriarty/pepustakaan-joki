<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        // Logika otentikasi
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'anggota'])) {
            return redirect()->intended('/anggota-dashboard');
        } elseif (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'admin'])) {
            return redirect()->intended('/admin-dashboard');
        } else {
            return redirect('/login')->with('error', 'Login failed, please check your credentials.');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    //
}
