<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductlistController;
use App\Http\Controllers\SearchController;

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


/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
|
| Welcome USER. Enjoy :)
|
*/


Route::get('/', function () {
    return view('welcome');
})->name('/');

Route::get('/productlist', function () {
    return view('productlist');
});

Route::get('/productlist', [ProductlistController::class, 'List']);
Route::get('/preview/{id}', [ProductlistController::class, 'preview']);

###############################################################################

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
|
| Most of the Routes here are AUTHENTICATED.
| The USER most have to LOGIN their account to be able
| redirected to this routes.
|
*/

Auth::routes();


/*
|--------------------------------------------------------------------------
| HOMECONTROLLER ROUTES
|--------------------------------------------------------------------------
*/

//  UPLOADS ROUTE
Route::get('/upload', [HomeController::class, 'create'])->middleware('auth');
Route::post('/upload', [HomeController::class, 'store'])->middleware('auth');

// DASHBOARD ROUTE - AUTHENTICATED
Route::get('/home', [HomeController::class, 'index'])->middleware('auth');

//  ADMIN FUNCTION ROUTES
Route::get('/delete/{id}', [HomeController::class, 'delete'])->middleware('auth');
Route::get('/home/dashboard', [HomeController::class, 'datatable'])->middleware('auth');
Route::get('/editproduct/{id}', [HomeController::class, 'edit'])->middleware('auth');
Route::put('/update-data/{id}', [HomeController::class, 'update'])->middleware('auth');
Route::get('/home/userlist', [HomeController::class, 'userlist'])->middleware('auth');


/*
|--------------------------------------------------------------------------
| SEARCHCONTROLLER ROUTES
|--------------------------------------------------------------------------
*/

// SEARCH FUNCTION ROUTES
Route::get('/search', [SearchController::class, 'search'])->name('search');
Route::get('/searchuser', [SearchController::class, 'searchuser'])->name('search');
