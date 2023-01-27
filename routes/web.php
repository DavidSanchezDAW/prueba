<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibrosController;
use App\Http\Controllers\OperacionesController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SaleController;
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

Route::get('/', function () {
    return view('inicio');
})->name('inicio');




Route::get('primos/{num}', [OperacionesController::class, 'listarPrimos'])->name('primos')->whereNumber('num');
Route::get('factorial/{num}', [OperacionesController::class, 'factorial'])->whereNumber('num')->name('factorial');


Route::resource('sales', SaleController::class);
Route::resource('posts', PostController::class);
