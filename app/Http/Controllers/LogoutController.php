<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        Auth::logout();

        // NOTE redirect mudah dan ga ribet
        return redirect('/')->with('success', 'You are now logged out!');
        // NITE redirect susah dan ribet
        // return redirect(RouteServiceProvider::HOME);
    }
}
