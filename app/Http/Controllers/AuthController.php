<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function index()
    {
        return view("login");
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Make sure username and password are provided
        if (empty($credentials['email']) || empty($credentials['password'])) {
            return back()->withErrors(['email' => 'Please enter both email and password']);
        }

        if (Auth::attempt($credentials)) {
            // Authentication successful
            if (Auth::user()->level == 'admin') {
                return redirect()->intended('dashboard');
            } else {
                return redirect()->intended('/');
            }
        }

        // If authentication fails
        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'level' => 'user',
        ]);

        Auth::login($user);

        return redirect('/'); // Redirect to home or wherever you want
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/'); // Redirect to home or login page after logout
    }
}
