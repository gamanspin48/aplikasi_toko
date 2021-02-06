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

Route::get('/', function () {
    return view('index');
});
Route::get('/pengaturan_barang', 'App\Http\Controllers\IndexController@pengaturan_barang');
Route::get('/barang_masuk', 'App\Http\Controllers\IndexController@barang_masuk');
Route::get('/barang_keluar', 'App\Http\Controllers\IndexController@barang_keluar');

