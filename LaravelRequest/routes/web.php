<?php

use Illuminate\Support\Facades\Route;

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

//Route::get("/", [\App\Http\Controllers\CarController::class, "index"])->name("home");
Route::get("/search", [\App\Http\Controllers\CarController::class, "search"])->name("car.search");
Route::get("/", [\App\Http\Controllers\BookController::class, "index"])->name("home");