<?php

use App\Http\Controllers\Api\V1\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1'], function () {

    Route::get('articles', [ApiController::class, 'articles']);
    Route::get('articles/{article}', [ApiController::class, 'articleSingle']);

    Route::get('publications', [ApiController::class, 'publications']);
    Route::get('publications/{publication}', [ApiController::class, 'publicationSingle']);

    Route::get('tags', [ApiController::class, 'tags']);
    Route::get('tags/{tag}', [ApiController::class, 'tagSingle']);


    Route::get('faqs', [ApiController::class, 'faqs']);
});
