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
    Route::get('/get-all-artikel',[AdminController::class,'getAllArtikel']);
    Route::post('/create-artikel',[AdminController::class,'createArtikel']);
    Route::put('/edit-artikel/{id}',[AdminController::class,'updateArtikel']);
    Route::delete('/delete-artikel/{id}',[AdminController::class,'deleteArtikel']);
    Route::get('/get-all-berkas-pendaftaran',[AdminController::class,'getAllBerkasPendaftaran']);

    Route::post('/create-berkas-pendaftaran',[UserController::class,'createBerkasPendaftaran']);
    Route::put('/edit-berkas-pendaftarn/{id}',[UserController::class,'updateBerkasPendaftaran']);
    Route::delete('/delete-berkas-pendaftaran/{id}',[UserController::class,'deleteBerkasPendaftaran']);

    Route::get('/get-all-paket-selam',[DiveCenterController::class,'getAllPaketSelam']);
    Route::post('/create-paket-selam',[DiveCenterController::class,'createPaketSelam']);
    Route::put('/edit-paket-selam/{id}',[DiveCenterController::class,'updatePaketSelam']);
    Route::delete('/delete-paket-selam/{id}',[DiveCenterController::class,'deletePaketSelam']);
    Route::get('/get-all-jadwal-paket-selam',[DiveCenterController::class,'getAllJadwalPaket']);
    Route::get('/list-jadwal-paket-dive-center',[DiveCenterController::class,'listJadwalPaketDiveCenter']);
    Route::post('/create-jadwal-paket-selam',[DiveCenterController::class,'createJadwalPaket']);
    Route::put('/edit-jadwal-paket-selam/{id}',[DiveCenterController::class,'updateJadwalPaket']);
    Route::delete('/delete-jadwal-paket-selam/{id}',[DiveCenterController::class,'deleteJadwalPaket']);
    Route::get('/get-persyaratan-paket/{id}',[DiveCenterController::class,'getPersyaratanPaket']);
    Route::post('/create-persyaratan-paket',[DiveCenterController::class,'createPersyaratanPaket']);
    Route::put('/edit-persyaratan-paket/{id}',[DiveCenterController::class,'updatePersyaratanPaket']);
    Route::delete('/delete-persyaratan-paket/{id}',[DiveCenterController::class,'deletePersyaratanPaket']);
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