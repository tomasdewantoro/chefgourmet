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

Route::get('/', 'HomepageController@index');

Route::get('/post', 'PostController@index');
Route::get('/post/{post_slug}', 'PostController@singlepost');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
