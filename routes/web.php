<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\MinistriesController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\RegisterController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\MediasController;
use App\Http\Controllers\Admin\GiveController;
use App\Http\Controllers\Admin\FullCalenderController;


Route::get('/', function () {
    return view('welcome');
});

/* Media Routes */
Route::get('/media', [MediaController::class, 'showMediaPage'])->name('media');

/* Home Routes */
Route::get('/home', [HomeController::class, 'showHomePage'])->name('home');

/* Service Routes */
Route::get('/service', [ServiceController::class, 'showServicePage'])->name('service');

/* Ministries Routes */
Route::get('/ministries', [MinistriesController::class, 'showMinistriesPage'])->name('ministries');

/* Admin Routes */
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
Route::resource('/dashboard/posts', PostController::class)->middleware('auth'); 
Route::resource('/dashboard/medias', MediasController::class)->middleware('auth');
Route::resource('/dashboard/give', GiveController::class)->middleware('auth');
Route::middleware(['auth'])->group(function () {
 Route::get('fullcalender', [FullCalenderController::class, 'index']);
 Route::post('fullcalenderAjax', [FullCalenderController::class, 'ajax']);
});