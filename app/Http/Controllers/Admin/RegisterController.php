<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('dashboard.register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
       $data = $request->validate([
        'name' => 'required',
        'password' => 'required'
       ]);

       $data['password'] = Hash::make($data['password']);
       User::create($data);
       return redirect('/login')->with('success', 'Registration Success');
    }
}