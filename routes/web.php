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
use App\Http\Controllers\CartController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PaymentController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\Auth\SalesReportController;


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

        // hapus barang yang dipilih
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
Route::middleware(['auth', AdminMiddleware::class])->prefix('admin')->name('admin.')->group(function () {
     Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Barang CRUD
    Route::prefix('databarang')->name('databarang.')->group(function () {
        Route::get('/', [BarangController::class, 'index'])->name('index');
        Route::post('/', [BarangController::class, 'store'])->name('store');
        Route::get('/{barang}/edit', [BarangController::class, 'edit'])->name('edit');
        Route::put('/{barang}', [BarangController::class, 'update'])->name('update');
        Route::delete('/{barang}', [BarangController::class, 'destroy'])->name('destroy');
    });

    // Laporan Penjualan
    Route::prefix('laporan-penjualan')->name('laporan-penjualan.')->group(function () {
        Route::get('/', [LaporanPenjualanController::class, 'index'])->name('index');
        Route::get('/export', [LaporanPenjualanController::class, 'exportExcel'])->name('export');
        Route::get('/export-pdf', [LaporanPenjualanController::class, 'exportPDF'])->name('export-pdf');
        Route::get('/laporan-detail', [LaporanPenjualanController::class, 'detail'])->name('detail');
    });

    // Order detail
    Route::prefix('orders')->name('orders.')->group(function () {
        Route::get('/{order}', [OrderController::class, 'show'])->name('show');
    });

    // Paket routes
    Route::prefix('paket')->name('paket.')->group(function () {
        Route::get('/', [PaketController::class, 'index'])->name('index');
        Route::post('/', [PaketController::class, 'store'])->name('store');
        Route::get('/create', [PaketController::class, 'create'])->name('create');
        Route::get('/{paket}/edit', [PaketController::class, 'edit'])->name('edit');
        Route::put('/{paket}', [PaketController::class, 'update'])->name('update');
        Route::delete('/{paket}', [PaketController::class, 'destroy'])->name('destroy');
    });
});

    


        // Route untuk menampilkan halaman tentang kami
        Route::get('/about', function () {
            return view('about');
        })->name('about');

        // Route untuk menampilkan halaman produk dan melakukan pencarian
        Route::get('/produk/cari', [ProdukController::class, 'cari'])->name('produk.cari');

        Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');

        Route::get('/produk/{id}', [ProdukController::class, 'show'])->name('produk.show');


        // Tampilkan halaman keranjang
        Route::get('/keranjang', [CartController::class, 'index'])
            ->name('cart.index')
            ->middleware('auth');

        // Tambah ke keranjang (misal dari tombol di halaman produk)
        Route::post('/keranjang/tambah', [CartController::class, 'addToCart'])
            ->name('cart.add')
            ->middleware('auth');

        // Hapus item keranjang
        Route::delete('/keranjang/{id}', [CartController::class, 'remove'])
            ->name('cart.remove')
            ->middleware('auth');

        // Update quantity (increment/decrement)
        Route::patch('/keranjang/{id}', [CartController::class, 'update'])
            ->name('cart.update')
            ->middleware('auth');

        // Route untuk menampilkan halaman Contact
        Route::get('/contact', function () {
            return view('contact');
        })->name('contact');

        // Route untuk menampilkan halaman Checkout
        Route::get('/checkout', function () {
            return view('checkout');
        })->name('checkout');


       
        // Routes for Public Paket Views
        Route::get('/paket', [PaketController::class, 'publicIndex'])->name('paket.index'); // Public view for listing packages
        Route::get('/paket/{id}/detail', [PaketController::class, 'show'])->name('paket.detail'); // Public view for package details


        // Route untuk komponen
        Route::get('/komponen', function () {
            return view('komponen.index');
        })->name('komponen.index');

          // Service routes
        Route::get('/service', function () {
        return view('service.index');
        })->name('service');

        // Route Payment
        
Route::post('/payment', [PaymentController::class, 'createTransaction'])->name('payment.create');
Route::post('/payment/callback', [PaymentController::class, 'handleCallback'])->name('payment.callback');

       
