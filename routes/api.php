<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DiveCenterController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/divesites',[DiveCenterController::class,'index']);
Route::post('/divesites',[DiveCenterController::class,'create']);
Route::put('/divesites/{$id}',[DiveCenterController::class,'update']);
Route::delete('/divesites/{$id}',[DiveCenterController::class,'delete']);