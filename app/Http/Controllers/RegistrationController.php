<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\RegistrationRequest;

class RegistrationController extends Controller
{
    // NOTE ini bisa dilakukan melalui Route web.php
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }

    public function create()
    {
        return view('auth.register');
    }

    public function store(RegistrationRequest $request)
    {
        User::create($request->all());

        return redirect('/')->with('success', 'Berhasil mendaftar');
    }
}
