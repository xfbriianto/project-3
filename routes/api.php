<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\LaporanPenjualanController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PaymentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

// ✅ AUTH API (Login & Register)
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// ✅ Protected Routes (dengan token JWT/sanctum)
Route::middleware('auth:sanctum')->group(function () {

    Route::post('/logout', [AuthController::class, 'logout']);

    // 📦 BARANG
    Route::get('/barang', [BarangController::class, 'index']);
    Route::post('/barang', [BarangController::class, 'store']);
    Route::get('/barang/{barang}', [BarangController::class, 'edit']); // bisa pakai show juga
    Route::put('/barang/{barang}', [BarangController::class, 'update']);
    Route::delete('/barang/{barang}', [BarangController::class, 'destroy']);
    Route::delete('/barang', [BarangController::class, 'bulkDestroy']); // bulk delete

    // 📈 LAPORAN PENJUALAN
    Route::get('/laporan-penjualan', [LaporanPenjualanController::class, 'index']);
    Route::get('/laporan-penjualan/export', [LaporanPenjualanController::class, 'exportExcel']);
    Route::get('/laporan-penjualan/export-pdf', [LaporanPenjualanController::class, 'exportPDF']);

    // 📦 PAKET
    Route::get('/paket', [PaketController::class, 'index']);
    Route::post('/paket', [PaketController::class, 'store']);
    Route::get('/paket/{paket}', [PaketController::class, 'edit']);
    Route::put('/paket/{paket}', [PaketController::class, 'update']);
    Route::delete('/paket/{paket}', [PaketController::class, 'destroy']);

    // 🧺 KERANJANG
    Route::get('/keranjang', [CartController::class, 'index']);
    Route::post('/keranjang/tambah', [CartController::class, 'addToCart']);
    Route::delete('/keranjang/{id}', [CartController::class, 'remove']);
    Route::patch('/keranjang/{id}', [CartController::class, 'update']);

    // 🧾 ORDER DETAIL
    Route::get('/orders/{order}', [OrderController::class, 'show']);

    // 📊 RATING PRODUK
    Route::post('/rating', [RatingController::class, 'store'])->middleware('auth');
    Route::get('/rating/{barang_id}', [RatingController::class, 'show']);


});

// 📦 PRODUK (tidak perlu login)
Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/produk/cari', [ProdukController::class, 'cari']);
Route::get('/produk/{id}', [ProdukController::class, 'show']);

// ✅ MIDTRANS CALLBACK (tidak perlu auth)

Route::post('/midtrans/callback', [PaymentController::class, 'handleCallback']);
