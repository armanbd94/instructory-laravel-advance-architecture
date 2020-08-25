<?php

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

Route::prefix('backend')->group(function() {
    Route::get('/', 'BackendController@index');
});

Route::get('post','PostController@index')->name('post');
Route::get('post/create','PostController@create')->name('post.create');
Route::post('post/store','PostController@store')->name('post.store');