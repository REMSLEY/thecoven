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
Route::get('links', function () {
    return view('links');
});

Route::get('about', function () {
    return view('about');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', 'PostController@displayPosts');

Route::get('/pooo', 'DemoController@test');


