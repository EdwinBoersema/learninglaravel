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

// about Route
Route::get('/about', function() {
    
    return view('simple.about');
});

// default Route
Route::get('/', function () {
    return view('simple.home', [
        'articles' => App\article::latest()->get()
    ]);
});

// ARTICLES
// index
Route::get('/articles', 'ArticleController@showAll');

// create article
Route::get('/articles/create', 'ArticleController@create');

Route::post('/articles', 'ArticleController@store');

// show article
Route::get('/articles/{article}', 'ArticleController@show');

// edit article
Route::get('/articles/{article}/edit', 'ArticleController@edit');

Route::put('/articles/{article}', 'ArticleController@update');