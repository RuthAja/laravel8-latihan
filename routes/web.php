<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// }); //NOTE versi php 7.3
Route::get('/', fn () => view('home')); //NOTE fitur dari php 7.4

// Route::get('/profile', function () {
//     $name = 'Ruth Ajalah';
//     return view('profile', [
//         'name' => $name
//     ]);
// });

Route::get('/contact', fn () => view('contact', [
    'name' => 'Ruth Ajalah'
]));

Route::view('about', 'about');
Route::view('profile', 'profile');
