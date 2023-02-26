<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FavoriteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [IndexController::class, "show"])->name('home');
Route::get('/home/{id}', [HomeController::class, "show"])->name('kvartira');

Route::get('/favorites', [FavoriteController::class, "index"])->name("favorites");
Route::get('/favorites/get', [FavoriteController::class, "get_all"])->name("favorites_get");
Route::post('/favorites/add', [FavoriteController::class, "add"])->name("favorites_add");
Route::delete('/favorites/delete', [FavoriteController::class, "delete"])->name("favorites_delete");
Route::delete('/favorites/clear', [FavoriteController::class, "clear"])->name("favorites_clear");
