<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LevelController;
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

Route::get('/level', [LevelController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);

Route::get('/user/tambah', [UserController::class, 'tambah'])->name('/user/tambah');
Route::get('/user/ubah/{id}', [UserController::class,  'ubah'])->name('/user/ubah');
Route::get('/user/hapus/{id}', [UserController::class, 'hapus'])->name('/user/hapus');