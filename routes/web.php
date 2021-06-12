<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bukucontroller;
use App\Http\Controllers\Excel;
use App\Exports\bukuexport;
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
    return view('welcome');
});
Route::get('/buku',[bukucontroller::class,'index']);
Route::get('/cari',[bukucontroller::class,'carijoin']);
Route::get('/export', 'BukuController@export');