<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::namespace('App\Http\Controllers')-> group(function () {

    Route::get('/','PageController@home')->name ('home');
    Route::get('/about','PageController@about')->name ('about');
    Route::get('/contact','PageController@contact')->name ('contact');
    Route::get('/blog','PageController@blog')->name ('blog');
    Route::get('/services', 'PageController@services')->name ('services');
    Route::get('/products', 'PageController@products')->name ('products');
    Route::get('/gallery','PageController@gallery')->name ('gallery');
    Route::get('/student/{adm}','PageController@student')->name ('student');
    Route::get('/student/{adm}/{grade}','PageController@student')->name ('student');
    Route::get('/student/{adm}/{marks}','PageController@student')->name ('marks');




});
