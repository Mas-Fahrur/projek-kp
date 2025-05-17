<?php

use App\Http\Controllers\AdminAuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ReceiptController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\UserAuthController;

Route::get('/', function () {
    return view('beranda.beranda');
})->name('beranda');

Route::get('/produk/{kategori}', [App\Http\Controllers\ProductController::class, 'index'])->name('produk.kategori');

// Keranjang
Route::get('/keranjang', [KeranjangController::class, 'showKeranjang'])->name('keranjang');

//Profil
Route::get('/profil', [ProfilController::class, 'showProfil'])->name('profil');

// Optional: Login tetap boleh ada
// Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [AuthController::class, 'login']);

// Product routes (tanpa middleware)
Route::post('/products', [ProductController::class, 'store']);
Route::get('/products', [ProductController::class, 'index']);
Route::delete('/products/{id}', [ProductController::class, 'destroy']);

// Cart routes (tanpa middleware)
Route::post('/cart', [CartController::class, 'addToCart']);
Route::post('/checkout', [CartController::class, 'checkout']);

Route::get('/transaction/receipt/{nama}', [ReceiptController::class, 'printReceipt'])->name('transaction.receipt');
Route::get('/admin/reports/transactions', [AdminController::class, 'transactionReport'])->name('admin.transactionReport');

Route::get('/dashboard', function () {
    return view('pages.dashboard');
});

Route::get('/user/register', [UserAuthController::class, 'showRegister']);
Route::post('/user/register', [UserAuthController::class, 'Register'])->name('register');
Route::get('/user/login', [UserAuthController::class, 'showLogin']);
Route::post('/user/login', [UserAuthController::class,'login'])->name('login');

Route::post('/user/register', [UserAuthController::class, 'register'])->name('register');

// Admin Login
Route::get('/admin/login', [AdminAuthController::class, 'showLogin']);
Route::get('/admin/dashboard', function () {
    return view('pages.admin_dashboard');
});
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login');