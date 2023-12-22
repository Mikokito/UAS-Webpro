<?php

use App\Http\Controllers\FacebookController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\MinistriesController;


use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\FullCalenderController;
use App\Http\Controllers\GiveController;
use App\Http\Controllers\InstagramController;
use App\Http\Controllers\YoutubeController;

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

/* Give Routes */
Route::get('/give', [GiveController::class, 'showGivePage'])->name('give');

/* Admin Routes terkutuk*/
Route::get('/dashboard', function() {
    return view('dashboard.dashboard', [
        "title" => "Dashboard"
    ]);
})->middleware('auth');

Route::get('/events', function() {
    return view('events', [
        "title" => "Events"
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
Route::resource('/dashboard/posts', PostController::class)->middleware('auth'); 
Route::resource('/dashboard/youtube', YoutubeController::class)->middleware('auth');
Route::resource('/dashboard/instagram', InstagramController::class)->middleware('auth');
Route::resource('/dashboard/facebook', FacebookController::class)->middleware('auth');
Route::resource('/dashboard/give', GiveController::class)->middleware('auth');
Route::middleware(['auth'])->group(function () {
    Route::get('fullcalender', [FullCalenderController::class, 'index']);
    Route::post('fullcalenderAjax', [FullCalenderController::class, 'ajax']);
});
