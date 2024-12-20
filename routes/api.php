<?php

use App\Http\Controllers\AdController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\VerifyController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::post('/login', [AuthController::class, 'login'])->name('api.login');

    Route::post('/signup', [AuthController::class, 'signup'])->name('api.signup');

    Route::post('/reset-password', [VerifyController::class, 'sendResetLink'])->name('api.reset.password');
});

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('api.logout');
});

Route::get('/ads', [AdController::class, 'ads'])->name('api.ads');

Route::post('/email/resend-verification', [VerifyController::class, 'resendVerify'])->name('api.verify.resend');
