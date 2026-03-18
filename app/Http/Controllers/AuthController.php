<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\ReCaptha;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        if (auth()->check()) {
            return redirect()->route('portal-admin.dashboard');
        }
        return view('pages.admin.auth.login');
    }

    public function loginAttempt(Request $request)
    {
        // Validate the request
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
            'g-recaptcha-response' => ['required', new ReCaptha],
        ]);

        $loginCredentials = $request->only('email', 'password');
        if (auth()->attempt($loginCredentials)) {
            // Authentication passed
            return redirect()->route('portal-admin.dashboard');
        }

        return redirect()->route('portal-admin.login')->withInput()->withErrors(['errorLogin' => 'Login tidak valid tidak ditemukan']);
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        auth()->logout();
        return redirect('/')->with('message', 'Logout successful');
    }
}
