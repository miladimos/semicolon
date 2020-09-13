<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'webmaster'], function(){
    Route::get('/', 'WebmasterController@index')->name('webmaster.index');


    Route::resources([
        'category'=>'CategoryController',
        'tag'=>'TagController',
        'role'=>'RoleController',
        'permission'=>'PermissionController'
    ]);

    Route::get('/article', 'ArticleController@index')->name('article.index');
    Route::get('/user', 'UserController@index')->name('user.index');


//    Route::get('/article/trashed', 'ArticleController@trashed')->name('article.trashed');
//    Route::delete('/article/trashed/{id}', 'ArticleController@restore')->name('article.restore');
//    Route::delete('/article/trashed/{id}/fdelete', 'ArticleController@fdestroy')->name('article.fdestroy');
//    Route::resource('article', 'ArticleController');
//
//
//    Route::get('/user/role', 'UserController@role')->name('user.role');
//    Route::post('/user/role', 'UserController@storerole')->name('user.role.store');
//    Route::get('/user/admins', 'UserController@admins')->name('user.admins');

});
