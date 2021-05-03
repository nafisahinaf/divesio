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


Route::get('/', [PageController::class,'home'])->name('home');
Route::get('/detaildivecenter', [PageController::class,'detaildivecenter']);
Route::get('/detailpaket', [PageController::class,'detailpaket']);
Route::get('/about', [PageController::class,'about']);
Route::get('/artikel', [PageController::class,'artikel']);
Route::get('/login', [PageController::class,'login']);
Route::get('/registerr', [PageController::class,'register']);
Route::get('/detailartikel', [PageController::class,'detailartikel']);
Route::get('/formpesan', [PageController::class,'formpesan']);
Route::get('/profil', [PageController::class,'profil']);
Route::get('/pengajuandivecenter', [PageController::class,'pengajuandivecenter']);


Auth::routes();

Route::get('/divecenter', [DiveCenterController::class,'index']);

Route::get('/daftardivecenter',[DiveCenterController::class,'getDataDiveCenter']);

// Route::get('/home', [HomeController::class, 'index'])->name('home');

//Route cek BE
// teshome

Route::get('/hometest', [PageController::class,'hometest']);
Route::get('/formpesan2', [PageController::class,'formpesan2']);
Route::get('/divecentertest', [DiveCenterController::class,'test']);
