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
Route::get('pages/links', function () {
    return view('pages/links');
});

Route::get('pages/about', function () {
    return view('pages/about');
});

Route::get('', function () {
    return view('pages/welcome');
});

Route::get('pages/welcome', function () {
    return view('pages/welcome');
});

//Route::get('/hello', 'PostController@displayPosts');

Route::resource('posts', 'PostController');
Route::resource('comments', 'CommentController');
Route::resource('tags', 'TagController');
Route::resource('users', 'UserController');


