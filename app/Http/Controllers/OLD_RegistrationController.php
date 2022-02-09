<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegistrationRequest;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(RegistrationRequest $request)
    {
        // $user = User::where('email', $request->email)->orWhere('username', $request->username)->first();
        // if ($user) {
        //     dd('User already exists');
        // };

        // TODO di sederhanakan
        // User::create([
        //     'email' => $request->email,
        //     'username' => $request->username,
        //     'name' => $request->name,
        //     'password' => bcrypt($request->password),
        // ]);

        // $attributes = $request->all();

        // NOTE lebih pendek atau sederhana
        // TODO bcrypt password / dengan cara Hash
        // $atribut['password'] = Hash::make($request->password);
        // $attributes['password'] = bcrypt($attributes['password']); //NOTE sudah dilakukan oleh User.php setPasswordAtribut()
        User::create($request->all());

        // session()->flash('success', 'You are now registered and can log in');
        return redirect('/')->with('success', 'Berhasil mendaftar');
        // return back();
    }
}
