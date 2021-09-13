<?php

use App\Http\Controllers\Site\Auth\LoginController;
use App\Http\Controllers\Site\Auth\RegisterController;

Route::group(['as' => 'auth.'], function () {
    Route::get('register', [RegisterController::class, 'showRegisterForm'])->name('register.form');
    Route::get('register', [RegisterController::class, 'register'])->name('register');

    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login.form');
    Route::get('login', [LoginController::class, 'login'])->name('login');
});
