<?php

// use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();
Route::get('/', 'ArticleController@index')->name('articles.index');
Route::resource('/articles', 'ArticleController')->except(['index', 'show'])->middleware('auth');
Route::resource('/articles', 'ArticleController')->only(['show']);
