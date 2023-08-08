<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// menggunakan blade
// Route::get('siswa/list',[SiswaController::class,'index']);
Route::get('siswa/create',[SiswaController::class,'create']);
Route::post('siswa/create',[SiswaController::class,'store']);
Route::get('siswa/{id}',[SiswaController::class,'edit']);
Route::put('siswa/{id}',[SiswaController::class,'update']);
Route::delete('siswa/{id}',[SiswaController::class,'delete']);
// menggunakan vue
Route::get('list/siswa',[SiswaController::class,'index']);
Route::get('get-siswa',[SiswaController::class,'get_data']);
Route::post('store-siswa',[SiswaController::class,'store_siswa']);
Route::get('get-siswa/{id}',[SiswaController::class,'get_detail']);
Route::delete('hapus-siswa/{id}',[SiswaController::class,'hapus_siswa']);