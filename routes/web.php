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


Route::get('pages/about/thegang', function(){
    return view ('pages/about/thegang');
});

Route::get('pages/about/thankyou', function(){
    return view ('pages/about/thankyou');
});

Route::get('pages/about/news', function(){
    return view ('pages/about/news');
});

Route::get('blog/{slug}', ['as' => 'posts.publicsingle', 'uses' => 'PostController@getPublicSingle'])->where('slug', '([\w\d\-\_])+');


Route::get('pages/contact', function(){
    return view ('pages/contact');
});

Route::get('pages/links', function () {
    return view('pages/links');
});

Route::get('pages/about', function () {
    return view('pages/about');
});

//Route::get('','PostController@index');

//Route::get('', function () {
//    return view('pages/welcome');
//});

//Route::get('/hello', 'PostController@displayPosts');

Route::resource('posts', 'PostController');
Route::resource('comments', 'CommentController');
Route::resource('tags', 'TagController');
Route::resource('users', 'UserController');

Route::get('', 'PostController@getIndex');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/posts/public', 'PostController@index');
Route::get('/posts/public', 'PostController@show');

//Route::get('users/index', function(){
//    return view('users/index');
//});