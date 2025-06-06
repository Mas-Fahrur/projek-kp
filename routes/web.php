<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
    
Route::get('/', function () {
    return view('welcome'); // Halaman beranda
})->name('beranda');

Route::get('/produk/{kategori}', [ProdukController::class, 'showByCategory'])->name('produk.kategori');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'showLogin'])->name('admin.login');
    Route::post('/login', [AdminAuthController::class, 'login']);
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->middleware('auth:admin');
});

// admin
Route::get('/admin', function () {
    return view('admin.dashboard');
});


Route::get('/transaksi', function () {
    return view('admin.transaksi');
});

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');



// User
Route::prefix('user')->group(function () {
    Route::get('/dashboard', function () {
        return view('auth.dashboard');
    })->name('user.dashboard');
    Route::get('/login', [UserAuthController::class, 'showLogin'])->name('show.login');
    Route::post('/login', [UserAuthController::class, 'login'])->name('user.login');
});

require __DIR__ . '/auth.php';
