<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DiveCenterController;
use App\Http\Controllers\UserController;
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

Route::get('/', [PageController::class,'home']);
Route::get('/detaildivecenter', [PageController::class,'detaildivecenter']);
Route::get('/detailpaket', [PageController::class,'detailpaket']);
Route::get('/about', [PageController::class,'about']);
Route::get('/artikel', [PageController::class,'artikel']);

Route::get('/detailartikel', [PageController::class,'detailartikel']);


Route::get('/divecenter', [DiveCenterController::class,'index']);

Route::get('/daftardivecenter',[DiveCenterController::class,'getDataDiveCenter']);
