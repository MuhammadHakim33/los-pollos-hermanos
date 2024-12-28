<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\TransactionController;
use App\Http\Middleware\EnsureCartFilled;
use App\Http\Middleware\EnsurePaymentStatusNotPending;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::post('/cart', [CartController::class, 'store']);
    Route::delete('/cart/{id}', [CartController::class, 'destroy']);
    Route::put('/cart/{id}/decrease', [CartController::class, 'decrease']);
    Route::put('/cart/{id}/increase', [CartController::class, 'increase']);

    Route::get('/checkout', [TransactionController::class, 'create'])->middleware(EnsureCartFilled::class);
    Route::post('/checkout', [TransactionController::class, 'store'])->middleware(EnsureCartFilled::class);
    Route::get('/payment/{order:snap_token}', [TransactionController::class, 'payment'])->middleware(EnsurePaymentStatusNotPending::class);
    Route::put('/order/{order}/approve', [TransactionController::class, 'approve']);
    Route::put('/order/{order}/failed', [TransactionController::class, 'failed']);
    Route::get('/order/{order}/detail', [TransactionController::class, 'show']);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';