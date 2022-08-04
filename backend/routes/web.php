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

Route::get('/',[\App\Http\Controllers\CatalogController::class,'index']);

Route::get('/{bland}',[\App\Http\Controllers\CatalogController::class,'brand'])->name('brand');
Route::get('/{bland}/{model}',[\App\Http\Controllers\CatalogController::class,'model']);
