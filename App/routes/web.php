<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\FullCalenderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::controller(ServiceController::class)->group(function(){
    Route::get("/service", 'index')->name('service.index');
});

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

// Route::get('/dashboard/media', function() {
//     return view('dashboard.media.index', [
//         "title" => "Media"
//     ]);
// });

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
Route::resource('/dashboard/posts', PostController::class)->middleware('auth'); 
Route::resource('/dashboard/media', MediaController::class)->middleware('auth');
Route::middleware(['auth'])->group(function () {
    Route::get('fullcalender', [FullCalenderController::class, 'index']);
    Route::post('fullcalenderAjax', [FullCalenderController::class, 'ajax']);
});
