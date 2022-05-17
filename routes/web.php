<?php

use App\Http\Controllers\userdatacontroller;
use App\Http\Controllers\bookdatacontroller;
use App\Http\Controllers\transaksicontroller;
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

Route::get('/input_userdata', [viewcontroller::class, 'input_userdata']);

Route::get('/detail_userdata', [viewcontroller::class, 'detail_userdata']);

Route::get('/edit_userdata', [viewcontroller::class, 'edit_userdata']); 

Route::get('/detail_bookdata', [viewcontroller::class, 'detail_bookdata']);


Route::get('/userdata', [userdatacontroller::class, 'userdata'])->name('userdata');

Route::POST('/input_userdata/insert', [userdatacontroller::class, 'insert'])->name('insert');

Route::get('/userdata/delete/{id_pengguna}', [userdatacontroller::class, 'delete']);

Route::get('/userdata/detail/{id_pengguna}', [userdatacontroller::class, 'detail']);

Route::get('/userdata/edit/{id_pengguna}', [userdatacontroller::class, 'edit']);

Route::POST('/userdata/update/{id_pengguna}', [userdatacontroller::class, 'update'])->name('update');


Route::get('/bookdata', [bookdatacontroller::class, 'bookdata']);

Route::POST('/input_bookdata/insert', [bookdatacontroller::class, 'insert'])->name('insert');

Route::get('/bookdata/delete/{id_buku}', [bookdatacontroller::class, 'delete']);

Route::get('/bookdata/detail/{id_buku}', [bookdatacontroller::class, 'detail']);

Route::get('/bookdata/edit/{id_buku}', [bookdatacontroller::class, 'edit']);

Route::POST('/bookdata/update/{id_buku}', [bookdatacontroller::class, 'update'])->name('update');


Route::get('/transaksi', [transaksicontroller::class, 'transaksi']);