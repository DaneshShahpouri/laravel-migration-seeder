<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\TrainController;
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

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/trains', [TrainController::class, 'index'])->name('trains');
Route::get('/trains/todayTrains', [TrainController::class, 'todayTrains'])->name('todayTrains');
