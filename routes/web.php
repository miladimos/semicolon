<?php

use App\Http\Controllers\Site\Newsletters\NewslettersSubscriberController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Site\SiteController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['as' => 'site.'], function () {
    Route::get('/', [SiteController::class, 'index'])->name('index');
    Route::post('newsletters/subscibe', [NewslettersSubscriberController::class, 'subscribe'])->name('newsletters.subscribe');
    Route::post('newsletters/unsubscibe', [NewslettersSubscriberController::class, 'unsubscibe'])->name('newsletters.unsubscibe');
});




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
