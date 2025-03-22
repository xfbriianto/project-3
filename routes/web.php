<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Tampilkan form login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// Proses login
Route::post('/login', [LoginController::class, 'login']);

// Logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Dashboard khusus admin
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware('auth')->name('admin.dashboard');

// Dashboard untuk user biasa
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('user.dashboard');

/*
|--------------------------------------------------------------------------
| Register Routes
|--------------------------------------------------------------------------
*/

// Tampilkan form register
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');

// Proses register
Route::post('/register', [RegisterController::class, 'register'])->name('register.post');
