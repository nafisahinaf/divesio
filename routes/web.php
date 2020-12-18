<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', function () {
    return view('home');
});

Route::get('/divesites', function () {
    return view('divesites');
});

Route::get('/detaildivecenter', function () {
    return view('detaildivecenter');
});

Route::get('/detailpaket', function () {
    return view('detailpaket');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/artikel', function () {
    return view('artikel');
});

Route::get('/detailartikel', function () {
    return view('detailartikel');
});