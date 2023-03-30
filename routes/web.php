<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductlistController;

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

Route::get('/home', [PhotoController::class, 'index'])->name('index');

Route::get('/productlist', [ProductlistController::class, 'List']);

Auth::routes();

Route::get('/upload', [PhotoController::class, 'create'])->middleware('auth');
Route::post('/upload', [PhotoController::class, 'store'])->middleware('auth');

Route::get('/home', [HomeController::class, 'index'])->middleware('auth');
Route::get('/home', [HomeController::class, 'index'])->middleware('auth');

route::get('/delete/{id}',[HomeController::class, 'delete'])->middleware('auth');

route::get('/editproduct/{id}',[HomeController::class, 'edit'])->middleware('auth');

route::put('/update-data/{id}',[HomeController::class, 'update'])->middleware('auth');

Route::get('/preview/{id}',[ProductlistController:: class, 'preview']);


