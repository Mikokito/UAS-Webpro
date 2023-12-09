<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MediaController;

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

Route::get('/media.php', function () {
    return view('welcome');
});

Route::get('/media', [MediaController::class, 'showMediaPage']);

Route::post('/save-link', 'YTLinkController@saveLink');

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::post('/admin/update-content', [AdminController::class, 'updateContent'])->name('admin.update-content');
