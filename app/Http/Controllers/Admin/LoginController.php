<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('dashboard.layouts.main', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials =  $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()-> intended('/dashboard');
        }

        return back()->with('loginError', 'Login Failed!');
 }

 public function logout()
 {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/login');
 }
    
};