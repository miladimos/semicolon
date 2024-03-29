<?php

use App\Http\Controllers\Site\Article\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\Newsletters\NewslettersSubscriberController;
use \App\Http\Controllers\Site\SiteController;

Route::group(['as' => 'site.'], function () {
    Route::get('/', [SiteController::class, 'index'])->name('index');
    Route::get('/categories', [SiteController::class, 'categories'])->name('categories.index');
    Route::get('/categories/{category}', [SiteController::class, 'category'])->name('categories.show');
    Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
    Route::get('@{username}/{article}', [ArticleController::class, 'show'])->name('articles.show');
    Route::get('/users', [SiteController::class, 'users'])->name('users.index');
    Route::get('/authors', [SiteController::class, 'authors'])->name('authors.index');
    Route::get('@{username}', [SiteController::class, 'user'])->name('users.show');


    Route::get('/search', [SiteController::class, 'search'])->name('search');



    Route::post('newsletters/subscibe', [NewslettersSubscriberController::class, 'subscribe'])->name('newsletters.subscribe');
    Route::post('newsletters/unsubscibe', [NewslettersSubscriberController::class, 'unsubscibe'])->name('newsletters.unsubscibe');
});

Route::group(['prefix' => 'account', 'middleware' => 'auth', 'as' => 'account.'], function () {
    //
});

