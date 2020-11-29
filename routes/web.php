<?php

use Illuminate\Support\Facades\Route;

// load controllers
use App\Http\Controllers\web\AuthController;
use App\Http\Controllers\web\CompotitionsController;
use App\Http\Controllers\web\ProfileController;


route::get('/', function(){
    return view('login/reset-password');
});
Route::name('login.')->group(function () {
    Route::get('login', [AuthController::class, 'index'])->name('index');
    Route::get('error', [AuthController::class, 'error'])->name('error');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('login-post', [AuthController::class, 'login'])->name('postlogin');
    Route::post('register', [AuthController::class, 'register'])->name('register');
    Route::get('reset/password', [AuthController::class, 'reset_password'])->name('reset.password');
    Route::post('store/reset/password', [AuthController::class, 'store_reset_password'])->name('store.reset.password');
});

Route::group(['middleware'=> ['auth','cekstatus:0']], function () {
    // Route assigned name "verifikasi.index"...
    Route::name('verifikasi.')->group(function () {
        Route::get('verifikasi', [AuthController::class, 'verifikasi'])->name('index');
    });
});
Route::group(['middleware'=> ['auth','cekstatus:1']], function () {
    // Route assigned name "compotitions.index"...
    Route::name('compotitions.')->prefix('admin')->group(function () {
        Route::get('data-compotitions', [CompotitionsController::class, 'index'])->name('index');
    });

    Route::name('profile.')->prefix('admin')->group(function(){
        route::get('profile', [ProfileController::class, 'index'])->name('index');
    });
});