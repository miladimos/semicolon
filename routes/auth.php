<?php

use App\Http\Controllers\Site\Auth\RegisterController;

Route::group(['middleware' => 'guest', 'as' => 'auth.'], function () {
    Route::get('register', [RegisterController::class, 'showRegisterForm']);
});
