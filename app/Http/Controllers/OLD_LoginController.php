<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
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

        // NOTE Alternativ 1
        // $credentials = ['email' => $request->email, 'password' => $request->password,];
        // NOTE Alternativ 2 lebih singkat
        // $credentials =  $request->only('email', 'password');
        // dd($credentials);
        // NOTE versi singkat dari alternativ 1 - User login
        if (Auth::attempt($attributes)) {
            return redirect('/')->with('success', 'Login Berhasil uyeee');
        }

        // NOTE alternativ 1 - user login
        // $user = User::where('email', $request->email)->first();
        // if ($user) {
        //     if (Hash::check($request->password, $user->password))  //NOTE $request->password adalh yg kita input dari form login sedangkan $user->password dari database
        //     {
        //         // dd($user);
        //         Auth::login($user);

        //         return redirect('/')->with('success', 'Login Success');
        //     }
        // }

        // Memunculkan error jika email atau password salah
        throw ValidationException::withMessages([
            'email' => 'The provided credentials are incorrect.'
        ]);
    }
}
