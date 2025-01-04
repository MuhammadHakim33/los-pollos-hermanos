<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\PaymentVerify;
use App\Http\Middleware\EnsureCartFilled;
use App\Http\Middleware\EnsurePaymentStatusNotPending;

Route::get('/', HomeController::class)->name('home');

Route::post('/verify-payment', PaymentVerify::class);

Route::middleware('auth')->group(function () {
    Route::post('/cart', [CartController::class, 'store']);
    Route::delete('/cart/{id}', [CartController::class, 'destroy']);
    Route::put('/cart/{id}/decrease', [CartController::class, 'decrease']);
    Route::put('/cart/{id}/increase', [CartController::class, 'increase']);

    Route::get('/checkout', [TransactionController::class, 'create'])->middleware(EnsureCartFilled::class);
    Route::post('/checkout', [TransactionController::class, 'store'])->middleware(EnsureCartFilled::class);
    Route::get('/order/{order}', [TransactionController::class, 'show']);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';