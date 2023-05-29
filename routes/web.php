<?php

use App\Http\Controllers\CasaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages;

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

Route::get('/', [CasaController::class, "home"]);
Route::get('/adiciona', [CasaController::class, "add"]);
Route::post('/adiciona', [CasaController::class, "addcasa"]);
Route::get('/modifica', [CasaController::class, "mod"]);
