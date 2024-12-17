<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\YourController; // Import YourController
use App\Http\Controllers\ChoiceController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KTPController;
use App\Http\Controllers\GlobalController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PesananController;

Route::get('/', function () {
    return view('landing.index'); // Ensure this view exists
});

// Sign-up routes
Route::get('/signup', [AuthController::class, 'showSignupForm'])->name('signup');
Route::post('/signup', [AuthController::class, 'signup'])->name('signup.submit');

// Login routes
Route::get('/login', function () {
    return view('login'); // Ensure this view exists
})->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

// Pilihan route
Route::get('/pilihan', [AuthController::class, 'pilihan'])
    ->middleware('auth')
    ->name('pilihan');


Route::post('/store-choice', [ChoiceController::class, 'store'])->middleware('auth')->name('storeChoice');

Route::get('/kategori', function () {
    return view('kategori');
});

Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
Route::get('/give-service', [KategoriController::class, 'giveService'])->name('give_service');
Route::post('/kategori/submit', [KategoriController::class, 'submit'])->name('kategori.submit');


Route::get('/ktp-verification', [KTPController::class, 'showForm'])->name('ktp.form');
Route::post('/ktp/submit', [KtpController::class, 'submit'])->name('ktp.submit');

Route::get('/homepage', [GlobalController::class, 'index'])->name('homepage');

Route::get('/edit-jasa', function () {
    return view('edit-jasa');
});

// Route::get('/lihat-jasa', function () {
//     return view('lihat-jasa');
// });

// Route::get('/tambah-jasa', function () {
//     return view('tambah-jasa');
// });


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');



Route::get('/search', [GlobalController::class, 'Search'])->name('search');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
});

Route::get('/edit-toko', function () {
    return view('edit-toko');
});

Route::get('/homepage', [GlobalController::class, 'homepage'])->name('homepage');
Route::get('/search', [GlobalController::class, 'Search'])->name('search');

Route::get('/favorite', function () {
    return view('favorite');
})->name('favorite');

Route::get('/detail', function () {
    return view('detail');
})->name('detail');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('/upload-pesanan', function () {
    return view('upload-pesanan');
});

Route::get('/daftar-pesanan', function () {
    return view('daftar-pesanan');
});

Route::get('/daftar-pesanan', [PesananController::class, 'index'])->name('pesanan.index');

Route::post('/upload-pesanan', [PesananController::class, 'store'])->name('upload.pesanan');

Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

Route::get('/admin/profile', [ProfileController::class, 'showAdminProfile'])->name('admin.profile.show');

Route::resource("post", PostController::class);


