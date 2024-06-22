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

#
});

/*
Go to GitHub and sign in to your account.
Click on your profile picture in the top right corner and select Settings.
In the left sidebar, click on Deve  loper settings.
Click on OAuth Apps.
Click on the name of the app that's causing the issue.
Under the Permissions section, check the workflow scope.
Click Save.
*/
