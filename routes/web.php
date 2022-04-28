<?php

use App\Http\Controllers\userdatacontroller;
use App\Http\Controllers\bookdatacontroller;
use App\Http\Controllers\viewcontroller;
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

Route::get('/', [viewcontroller::class, 'index']);

Route::get('/dashboard', [viewcontroller::class, 'dashboard']);

Route::get('/transaksi', [viewcontroller::class, 'transaksi']);

Route::get('/userdata', [userdatacontroller::class, 'userdata'])->name('userdata');

Route::get('/bookdata', [bookdatacontroller::class, 'bookdata']);

Route::get('/input_userdata', [viewcontroller::class, 'input_userdata']);

Route::post('/input_userdata/insert', [userdatacontroller::class, 'insert']);

Route::get('/userdata/delete/{id_pengguna}', [viewcontroller::class, 'delete']);