<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DiveCenterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
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

    Route::group(['middleware' => ['divecenter',],'prefix' => 'divecenter'], function($router) {
        
        Route::post('/create-paket-selam',[DiveCenterController::class,'createPaketSelam']);
        Route::post('/create-jadwal-paket-selam',[DiveCenterController::class,'createJadwalPaket']);
        Route::post('/create-persyaratan-paket',[DiveCenterController::class,'createPersyaratanPaket']);

        Route::put('/edit-jadwal-paket-selam/{id}',[DiveCenterController::class,'updateJadwalPaket']);
        Route::put('/edit-persyaratan-paket/{id}',[DiveCenterController::class,'updatePersyaratanPaket']);
        Route::put('/edit-paket-selam/{id}',[DiveCenterController::class,'editPaketSelam']);
        Route::put('/edit-dive-center/{id}',[DiveCenterController::class,'editDiveCenter']);

        Route::delete('/delete-persyaratan-paket/{id}',[DiveCenterController::class,'deletePersyaratanPaket']);
        Route::delete('/delete-paket-selam/{id}',[DiveCenterController::class,'deletePaketSelam']);
        Route::delete('/delete-jadwal-paket-selam/{id}',[DiveCenterController::class,'deleteJadwalPaket']);

        Route::get('/get-persyaratan-paket/{id}',[DiveCenterController::class,'getPersyaratanPaket']);
        Route::get('/get-jadwal-paket-mendatang',[DiveCenterController::class,'getJadwalPaketMendatang']);
        Route::get('get-all-jadwal-paket-dive-center',[DiveCenterController::class,'getAllJadwalPaketDiveCenter']);
       
        
    });

    Route::group(['middleware' => ['admin',],'prefix' => 'admin'], function($router) {
        Route::get('/get-all-paket-selam',[AdminController::class,'getAllPaketSelam']);
        Route::get('/get-all-dive-center',[AdminController::class,'getAllDiveCenter']);
        Route::post('/create-dive-center',[AdminController::class,'createDiveCenter']);
        Route::put('/edit-dive-center/{id}',[AdminController::class,'updateDiveCenter']);
        Route::delete('/delete-dive-center/{id}',[AdminController::class,'deleteDiveCenter']);
        Route::get('/get-all-artikel',[AdminController::class,'getAllArtikel']);
        Route::post('/create-artikel',[AdminController::class,'createArtikel']);
        Route::put('/edit-artikel/{id}',[AdminController::class,'updateArtikel']);
        Route::delete('/delete-artikel/{id}',[AdminController::class,'deleteArtikel']);
        Route::get('/get-all-berkas-pendaftaran',[AdminController::class,'getAllBerkasPendaftaran']);
    });   
   
    Route::group(['middleware' => ['pemesan'],'prefix' => 'pemesan'], function($router) {
        Route::get('/list-top-artikel',[UserController::class,'listTopArtikel']);
        Route::get('/list-top-paket-selam',[UserController::class,'listTopPaketSelam']);
        Route::get('/list-top-paket-selam-dive-center-pilihan/{id}',[UserController::class,'listTopPaketSelamDiveCenterPilihan']);
        Route::get('/list-top-dive-center',[UserController::class,'listTopDiveCenter']);
        Route::get('/get-histori',[UserController::class,'getHistori']);
        Route::get('/get-detail-histori/{id}',[UserController::class,'getDetailHistori']);
        Route::get('/detail-dive-center/{id}',[UserController::class,'detailDiveCenter']);
        Route::get('/detail-paket-selam/{id}',[UserController::class,'detailPaketSelam']);
        Route::get('/detail-pemesan/{id}',[UserController::class,'detailPemesan']);
        Route::post('/create-berkas-pendaftaran',[UserController::class,'createBerkasPendaftaran']);
        Route::post('/create-data-diri-pemesan',[UserController::class,'createDataDiriPemesan']);
        Route::post('/create-order',[UserController::class,'createOrder']);
        Route::post('/ajukan-dive-center',[UserController::class,'ajukanDiveCenter']);
        Route::put('/edit-berkas-pendaftarn/{id}',[UserController::class,'updateBerkasPendaftaran']);
        Route::put('/edit-profil',[UserController::class,'updateProfil']);
        Route::delete('/delete-berkas-pendaftaran/{id}',[UserController::class,'deleteBerkasPendaftaran']);
        
    });  
});

Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', [UserController::class,'login']);
    Route::post('register', [UserController::class,'register']);
    Route::group([
      'middleware' => 'auth:api'
    ], function() {
        Route::post('logout', [AuthController::class,'logout']);
        Route::get('user', [AuthController::class,'user']);
    });
});

// Route::get('/divesites',[DiveCenterController::class,'index']);
// Route::post('/divesites',[DiveCenterController::class,'create']);
// Route::put('/divesites/{$id}',[DiveCenterController::class,'update']);
// Route::delete('/divesites/{$id}',[DiveCenterController::class,'delete']);
