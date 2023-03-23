<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;

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

Route::get('/productlist', function () {
    return view('productlist');
});

Route::get('/home', [PhotoController::class, 'index'])->name('home');

Route::get('/productlist', [App\Http\Controllers\ProductlistController::class, 'List']);

Route::get('/upload', [PhotoController::class, 'create'])->name('home');
Route::post('/upload', [PhotoController::class, 'store'])->name('home');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
