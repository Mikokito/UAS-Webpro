<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

/* Media Routes */
Route::get('/media', 'App\Http\Controllers\MediaController@showMediaPage')->name('media');