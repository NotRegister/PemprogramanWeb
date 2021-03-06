<?php

use App\Http\Controllers\MahasiswaController;
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

Route::get('/', [MahasiswaController::class, 'index']);
Route::get('/proses-form-get', [MahasiswaController::class, 'prosesForm']);
Route::post('/proses-form', [MahasiswaController::class, 'prosesValidate']);
Route::get('/proses-form-validator', [MahasiswaController::class, 'prosesFormValidator']);
