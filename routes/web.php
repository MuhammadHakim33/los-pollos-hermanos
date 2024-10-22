<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('user.home.index');});

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Routes untuk login
Route::get('/login', function () {
    return view('user.auth.login.login');
})->name('login');

Route::get('/login/verifikasi', function () {
    return view('user.auth.login.verifikasi');
})->name('login.verifikasi');

// Routes untuk register
Route::get('/register', function () {
    return view('user.auth.register.register');
})->name('register');

Route::get('/register/biodata-email', function () {
    return view('user.auth.register.biodata_email');
})->name('register.biodata.email');

Route::get('/register/biodata-nama', function () {
    return view('user.auth.register.biodata_nama');
})->name('register.biodata.nama');

Route::get('/register/final', function () {
    return view('user.auth.register.final');
})->name('register.final');

Route::get('/register/verifikasi', function () {
    return view('user.auth.register.verifikasi');
})->name('register.verifikasi');

// Route untuk halaman login khusus
Route::get('/masuk', function () {
    return view('user.auth.register.masuk');
})->name('masuk');

require __DIR__.'/auth.php';
