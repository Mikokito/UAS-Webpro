<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;

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
    Route::get('/service/family', 'family')->name('service.family');
    Route::get('/service/army', 'army')->name('service.army');
    Route::get('/service/kids', 'kids')->name('service.kids');
    Route::get('/service/senior', 'senior')->name('service.senior');
    Route::get('/media', 'media')->name('service.media');  
});
