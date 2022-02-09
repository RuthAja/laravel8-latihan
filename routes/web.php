<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ProfileInformationController;

Route::get('/', HomeController::class);
Route::get('/contact', [ContactController::class, 'create']);
Route::post('/contact', [ContactController::class, 'store']);
Route::get('/profile/{identifier}', ProfileInformationController::class);

// Route::resource('/tasks', TasksController::class)->middleware('auth'); //NOTE ini sudah mewakilkan semua Route task yang ada di bawah dengan 1 baris
// Route::get('/tasks', [TasksController::class, 'index']);
// Route::post('/tasks', [TasksController::class, 'store']);
// Route::get('/tasks/{id}/edit', [TasksController::class, 'edit']);
// Route::put('/tasks/{id}', [TasksController::class, 'update']); // NOTE put() untuk mengupdate data
// Route::delete('/tasks/{id}/delete', [TasksController::class, 'delete'])->name('tasks.destroyyy'); // NOTE delete() untuk menghapus data


Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{user:username}', [UserController::class, 'show'])->name('users.show'); //NOTE untuk mengambil data user berdasarkan username. cara baru yang digantikan oleh User Model

Route::middleware('auth')->group(function () {
    Route::resource('/tasks', TasksController::class);
    Route::post('logout', LogoutController::class)->name('logout');
});

// NOTE alternativ middleware baru
Route::middleware('guest')->group(function () {
    Route::get('register', [RegistrationController::class, 'create'])->name('register');
    Route::post('register', [RegistrationController::class, 'store']); //NOTE valid jika ingin panggil name Route di formnya

    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('login');
});
// NOTE alternative untuk middleware guest lama
// Route::get('register', [RegistrationController::class, 'create'])->name('register')->middleware('guest');
// Route::post('register', [RegistrationController::class, 'store']); //NOTE valid jika ingin panggil name Route di formnya

// Route::get('/login', [LoginController::class, 'create'])->name('login')->middleware('guest');
// Route::post('/login', [LoginController::class, 'store'])->name('login');
