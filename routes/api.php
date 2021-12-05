<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Wallet\WalletController;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->group(function () {
    Route::post('login', [AuthController::class,'login']);
    Route::post('logout', [AuthController::class,'logout']);
    Route::post('register', [UserController::class, 'register']);
});

Route::group(['middleware' => ['jwt']], function () {
    Route::prefix('wallet')->group(function () {
        Route::get('balance',[WalletController::class,'balance']);
        Route::post('deposit', [WalletController::class, 'deposit']);
        Route::post('transfer', [WalletController::class, 'transfer']);
    });
});

