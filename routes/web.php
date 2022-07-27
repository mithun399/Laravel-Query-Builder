<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\retrieveController;
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

// Route::get('/',[retrieveController::class,'showAll']);
// Route::get('/',[retrieveController::class,'showOne']);
// Route::get('/',[retrieveController::class,'findData']);
// Route::get('/',[retrieveController::class,'pluckData']);
// Route::get('/',[retrieveController::class,'multiplepluckData']);
Route::get('/',[retrieveController::class,'value']);





