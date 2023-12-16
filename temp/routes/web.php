<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

/* Media Routes */
Route::get('/media', 'App\Http\Controllers\MediaController@showMediaPage')->name('media');

/* Home Routes */
Route::get('/home', 'App\Http\Controllers\HomeController@showHomePage')->name('home');

/* Service Routes */
Route::get('/service', 'App\Http\Controllers\ServiceController@showServicePage')->name('service');