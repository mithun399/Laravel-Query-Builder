<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\retrieveController;
use App\Http\Controllers\aggregatesController;
use App\Http\Controllers\selectController;
use App\Http\Controllers\mergeController;
use App\Http\Controllers\joinController;




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
// Route::get('/',[retrieveController::class,'value']);
// Route::get('/',[aggregatesController::class,'countRow']);
// Route::get('/',[aggregatesController::class,'max']);
// Route::get('/',[aggregatesController::class,'min']);
// Route::get('/',[aggregatesController::class,'avg']);
// Route::get('/',[selectController::class,'distinct']);
// Route::get('/',[selectController::class,'singleSelect']);
// Route::get('/',[selectController::class,'multipleSelect']);
// Route::get('/',[mergeController::class,'mergeData']);
// Route::get('/',[joinController::class,'leftJoin']);
Route::get('/',[joinController::class,'rightJoin']);













