<?php

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\Latihan\DragdropController;
use App\Http\Controllers\Latihan\DragdroptabelController;
use App\Http\Controllers\Latihan\HomeController;
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

Route::get('/', [HomepageController::class,'index']);

Route::get('dragdrop', [DragdropController::class,'index']);
Route::post('upload', [DragdropController::class,'upload']);
Route::delete('hapus/{id}', [DragdropController::class,'hapus']);
Route::get('data', [DragdropController::class,'data'])->name('data');

Route::post('simpan', [DragdroptabelController::class,'simpan'])->name('simpan');
Route::resource('dragdroptabel', DragdroptabelController::class);

Route::get('infinite', [HomeController::class,'infinite']);
Route::get('load', [HomeController::class,'load']);
Route::get('qrcode', [HomeController::class,'qrcode']);


Route::get('skeleton', [HomeController::class,'skeleton'])->name('skeleton');
Route::get('getdata', [HomeController::class,'getdata'])->name('getdata');
Route::post('prosesform', [HomeController::class,'proses']);
Route::get('latihan/{sesi}', [HomeController::class,'latihan']);



