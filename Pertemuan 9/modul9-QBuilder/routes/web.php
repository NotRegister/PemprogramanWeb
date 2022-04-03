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

Route::get('/insert', [MahasiswaController::class, 'insert']);
Route::get('/insert-banyak', [MahasiswaController::class, 'insertBanyak']);
Route::get('/update', [MahasiswaController::class, 'update']);
Route::get('/update-where', [MahasiswaController::class, 'updateWhere']);
Route::get('/update-or-insert', [MahasiswaController::class, 'updateOrInsert']);
Route::get('/delete', [MahasiswaController::class, 'delete']);
Route::get('/get-tampil', [MahasiswaController::class, 'getTampil']);
Route::get('/get-view', [MahasiswaController::class, 'getView']);
Route::get('/get-where', [MahasiswaController::class, 'getWhere']);
Route::get('/select', [MahasiswaController::class, 'select']);
Route::get('/take', [MahasiswaController::class, 'take']);
Route::get('/first', [MahasiswaController::class, 'first']);
Route::get('/find', [MahasiswaController::class, 'find']);
Route::get('/raw', [MahasiswaController::class, 'raw']);
