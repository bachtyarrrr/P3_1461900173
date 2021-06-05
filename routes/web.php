<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

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
    Route::get('/barang',[MahasiswaController::class, 'index']);
    Route::get('/barang/tambah',[MahasiswaController::class,'tambah']);
    Route::get('/barang/cari', [MahasiswaController::class,'cari']);
    Route::get('/barang/ruang', [MahasiswaController::class,'ruang']);
    Route::get('/barang/edit/{id}', [MahasiswaController::class, 'edit']);
    Route::post('/barang/store',[MahasiswaController::class, 'store']);
    Route::get('/barang/hapus/{id}',[MahasiswaController::class,'hapus']);
    Route::post('/barang/update', [MahasiswaController::class, 'update']);
