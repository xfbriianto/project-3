<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\Auth\LaporanPenjualanController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\HomeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

        // Auth routes
        Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [LoginController::class, 'login']);
        Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

        // Register routes
        Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
        Route::post('/register', [RegisterController::class, 'processRegister'])->name('register.post');

        // Forgot password routes
        Route::get('/forgot-password', [ForgotPasswordController::class, 'showForgotForm'])->name('forgot.password');
        Route::post('/forgot-password', [ForgotPasswordController::class, 'processForgot'])->name('forgot.password.post');
        Route::get('/get-your-code', [ForgotPasswordController::class, 'showOtpForm'])->name('get.your.code');
        Route::post('/get-your-code', [ForgotPasswordController::class, 'verifyOtp'])->name('verify.code');
        Route::get('/reset-password', [ForgotPasswordController::class, 'showResetForm'])->name('reset.password');
        Route::post('/reset-password', [ForgotPasswordController::class, 'processReset'])->name('reset.password.post');

Route::delete('admin/databarang/bulk', [App\Http\Controllers\BarangController::class, 'bulkDestroy'])
    ->name('admin.databarang.bulkDestroy');

        // Public routes
        Route::get('/', function () {
            return view('index');
        })->name('home');

        Route::get('/index', function () {
            return view('index');
        })->name('index');

      // Route untuk menampilkan halaman keranjang

        // Admin dashboard (auth required)
        Route::get('/admin/dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])
            ->middleware('auth')->name('dashboard');
        Route::prefix('admin')->middleware('auth')->group(function() {
            
        // Barang CRUD
        Route::get('databarang', [BarangController::class, 'index'])->name('admin.databarang');
        Route::post('databarang', [BarangController::class, 'store'])->name('admin.databarang.store');
        Route::get('databarang/{barang}/edit', [BarangController::class, 'edit'])->name('admin.databarang.edit'); // Tambahkan ini untuk edit
        Route::put('databarang/{barang}', [BarangController::class, 'update'])->name('admin.databarang.update');
        Route::delete('databarang/{barang}', [BarangController::class, 'destroy'])->name('admin.databarang.destroy');
    
        // Laporan Penjualan
        Route::get('laporan-penjualan', [LaporanPenjualanController::class, 'index'])->name('admin.laporan-penjualan');
        Route::get('laporan-penjualan/export', [LaporanPenjualanController::class, 'exportExcel'])->name('admin.laporan-penjualan.export');
        Route::get('laporan-penjualan/export-pdf', [LaporanPenjualanController::class, 'exportPDF'])->name('admin.laporan-penjualan.export-pdf');

        // Order detail
        Route::get('orders/{order}', [OrderController::class, 'show'])->name('admin.orders.show');
        });

        // Service routes
        Route::get('/service', function () {
        return view('service.index');
        })->name('service');
    
        // Paket routes
        Route::prefix('admin')->name('admin.')->group(function() {
            Route::get('paket', [PaketController::class, 'index'])->name('paket.index');
            Route::post('paket', [PaketController::class, 'store'])->name('paket.store');
            Route::get('paket/create', [PaketController::class, 'create'])->name('paket.create');
            Route::get('paket/{paket}/edit', [PaketController::class, 'edit'])->name('paket.edit');
            Route::put('paket/{paket}', [PaketController::class, 'update'])->name('paket.update');
            Route::delete('paket/{paket}', [PaketController::class, 'destroy'])->name('paket.destroy');
        });

    
// Route untuk menampilkan halaman keranjang
Route::get('/keranjang', function () {
    return view('keranjang');
})->name('keranjang');

// Route untuk menampilkan halaman tentang kami
Route::get('/about', function () {
    return view('about');
})->name('about');

// Route untuk menampilkan halaman produk dan melakukan pencarian
Route::get('/produk/cari', [ProdukController::class, 'cari'])->name('produk.cari');

Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');



;






