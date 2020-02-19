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


Route::get('/home', function() {
    return view('home');
});

// dynamic route
Route::get('/posts/{post}', 'PostController@show');

// home Route
Route::get('/simple', function () {
    return view('simple.home', [
        'articles' => App\article::latest()->get()
    ]);
});

// about Route
Route::get('/simple/about', function() {
    
    return view('simple.about');
});

// all articles Route
Route::get('simple/articles', 'ArticleController@showAll');

// show article
Route::get('/simple/article/{article}', 'ArticleController@show');


// default Route
Route::get('/', function () {
    return view('welcome');
});
