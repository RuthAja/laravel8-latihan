<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    // NOTE ini bisa dilakukan oleh Route web.php
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }

    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($attributes)) {
            return redirect('/')->with('success', 'Login Berhasil uyeee');
        }

        throw ValidationException::withMessages([
            'email' => 'The provided credentials are incorrect.'
        ]);
    }
}
