<?php

use App\Http\Controllers\Latihan\DragdropController;
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
    return view('welcome');
});

Route::get('dragdrop', [DragdropController::class,'index']);
Route::post('upload', [DragdropController::class,'upload']);
Route::delete('hapus/{id}', [DragdropController::class,'hapus']);
Route::get('data', [DragdropController::class,'data'])->name('data');
