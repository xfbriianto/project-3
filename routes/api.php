<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\LaporanPenjualanController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RatingController;

/*
|--------------------------------------------------------------------------
| Public Routes (Tidak Membutuhkan Autentikasi)
|--------------------------------------------------------------------------
*/

// ✅ AUTH PUBLIC
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// 📦 PRODUK (Baca publik)
Route::controller(ProdukController::class)->group(function () {
    Route::get('/produk', 'index');
    Route::get('/produk/cari', 'cari');
    Route::get('/produk/{id}', 'show');
});

// ✅ MIDTRANS CALLBACK
Route::post('/midtrans/callback', [PaymentController::class, 'handleCallback']);


/*
|--------------------------------------------------------------------------
| Protected Routes (Membutuhkan Autentikasi: auth:sanctum)
|--------------------------------------------------------------------------
*/
Route::middleware('auth:sanctum')->group(function () {

    // ✅ AUTH PROTECTED
    Route::post('/logout', [AuthController::class, 'logout']);

    // 📦 MANAJEMEN INVENTORY (Barang & Paket menggunakan Resource Controller)
    Route::apiResource('barang', BarangController::class);
    Route::apiResource('paket', PaketController::class);

    // 📦 BARANG ACTIONS
    Route::delete('/barang/bulk', [BarangController::class, 'bulkDestroy']); // bulk delete

    // 🧺 KERANJANG & ORDER
    Route::controller(CartController::class)->group(function () {
        Route::get('/keranjang', 'index');
        Route::post('/keranjang/tambah', 'addToCart');
        Route::delete('/keranjang/{id}', 'remove');
        Route::patch('/keranjang/{id}', 'update');
    });
    
    // 🧾 ORDER DETAIL
    Route::get('/orders/{order}', [OrderController::class, 'show']);

    // 📊 RATING PRODUK
    Route::post('/rating', [RatingController::class, 'store']); // Tetap singular sesuai Controller Anda
    Route::get('/rating/{barang_id}', [RatingController::class, 'show']); // Endpoint show untuk rating/review

    // 📈 LAPORAN PENJUALAN
    Route::controller(LaporanPenjualanController::class)->group(function () {
        Route::get('/laporan-penjualan', 'index');
        Route::get('/laporan-penjualan/export', 'exportExcel');
        Route::get('/laporan-penjualan/export-pdf', 'exportPDF');
    });
});