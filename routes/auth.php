<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\Auth\LoginController;
use App\Http\Controllers\Site\Auth\RegisterController;

Route::group(['as' => 'auth.', 'prefix' => 'auth'], function () {

    Route::group(['middleware' => 'guest'], function () {
        Route::get('register', [RegisterController::class, 'showRegisterForm'])->name('register.form');
        Route::post('register', [RegisterController::class, 'register'])->name('register');

        Route::get('login', [LoginController::class, 'showLoginForm'])->name('login.form');
        Route::post('login', [LoginController::class, 'login'])->name('login');
    });

    Route::group(['middleware' => 'auth'], function () {
        Route::get('logout', [LoginController::class, 'logout'])->name('logout');
    });
});
