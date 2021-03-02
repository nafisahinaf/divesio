<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DiveCenterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Htpp\Controllers\Auth\AuthController;
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

Route::group(['middleware' => ['auth:api']], function(){
    Route::get('/get-all-dive-center',[AdminController::class,'getAllDiveCenter']);
    Route::post('/create-dive-center',[AdminController::class,'createDiveCenter']);
    Route::put('/edit-dive-center/{id}',[AdminController::class,'updateDiveCenter']);
    Route::delete('/delete-dive-center/{id}',[AdminController::class,'deleteDiveCenter']);
    
    Route::get('/get-all-paket-selam',[DiveCenterController::class,'getAllPaketSelam']);
    Route::post('/create-paket-selam',[DiveCenterController::class,'createPaketSelam']);
    Route::put('/edit-paket-selam/{id}',[DiveCenterController::class,'updatePaketSelam']);
    Route::delete('/delete-paket-selam/{id}',[DiveCenterController::class,'deletePaketSelam']);


});

Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', [UserController::class,'login']);
    Route::group([
      'middleware' => 'auth:api'
    ], function() {
    });
});