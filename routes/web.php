<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NamaController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MatpelController;

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

Route::get('/nama', action: [NamaController::class, 'index']);
Route::get('/kelas', action: [KelasController::class, 'index']);
Route::get('/matpel', action: [MatpelController::class, 'index']);