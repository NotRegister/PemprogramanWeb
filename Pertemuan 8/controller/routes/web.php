<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CollectionController;

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


Route::get('/', [App\Http\Controllers\PageController::class, 'index']);
Route::get('/mahasiswa', [App\Http\Controllers\PageController::class, 'tampil']);
Route::get('/mahasiswa/tampil', [App\Http\Controllers\PageController::class, 'tampilmaha']);

//! Menggunakan use pagecontroller tidak perlu menuliskan lokasi file controller
Route::get('/', [PageController::class, 'index']);
Route::get('/mahasiswa', [PageController::class, 'tampil']);
Route::get('/mahasiswa/tampil', [PageController::class, 'tampilmaha']);


Route::get('/mahasiswa/facade', [PageController::class, 'cobafacade']);
Route::get('/mahasiswa/facade2', [PageController::class, 'cobafacade2']);

Route::get('/collectionsatu', [CollectionController::class, 'collectionsatu']);
Route::get('/collectiondua', [CollectionController::class, 'collectiondua']);
