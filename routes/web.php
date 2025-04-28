<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;


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
})->middleware('auth')->name('dashboard');

/*
|--------------------------------------------------------------------------
| Register Routes
|--------------------------------------------------------------------------
*/

Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [RegisterController::class, 'processRegister'])->name('register.post');

// Menampilkan form lupa password
Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('forgot.password');

// Memproses form lupa password (misal pakai controller)
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLink'])->name('forgot.password.post');




// 1. Forgot Password (GET & POST)
Route::get('/forgot-password', [ForgotPasswordController::class, 'showForgotForm'])->name('forgot.password');
Route::post('/forgot-password', [ForgotPasswordController::class, 'processForgot'])->name('forgot.password.post');

// 2. Get Your Code (GET & POST)
Route::get('/get-your-code', [ForgotPasswordController::class, 'showOtpForm'])->name('get.your.code');
Route::post('/get-your-code', [ForgotPasswordController::class, 'verifyOtp'])->name('verify.code');

Route::get('/reset-password', [ForgotPasswordController::class, 'showResetForm'])->name('reset.password');
Route::post('/reset-password', [ForgotPasswordController::class, 'processReset'])->name('reset.password.post');

