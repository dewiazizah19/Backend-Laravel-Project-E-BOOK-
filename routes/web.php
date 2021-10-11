<?php

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

Route::get('/dashboard.html', [viewcontroller::class, 'dashboard']);

Route::get('/transaksi.html', [viewcontroller::class, 'transaksi']);

Route::get('/userdata.html', [viewcontroller::class, 'userdata']);

Route::get('/bookdata.html', [viewcontroller::class, 'bookdata']);