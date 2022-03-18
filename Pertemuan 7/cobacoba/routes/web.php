<?php

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

/* Tampil data tanpa tag html */
Route::get('/mahasiswa/td1', function () {
    $nama = "muhammad rieki hredaya";
    $nilai = 90;
    $arrnilai = [75, 80, 20, 90];
    return view('mahasiswa', compact('nama', 'nilai', 'arrnilai'));
});

/* Tampil data dengan tag html */
Route::get('/mahasiswa/td2', function () {
    $nama = "<u>muhammad rieki hredaya</u>";
    $nilai = 90;
    $arrnilai = [75, 80, 20, 90];
    return view('mahasiswa', compact('nama', 'nilai', 'arrnilai'));
});

/* Switch case */
Route::get('/mahasiswa/sc1', function () {
    $nama = "muhammad rieki hredaya";
    $nilai = 75;
    $arrnilai = [75, 80, 20, 90];
    return view('mahasiswa', compact('nama', 'nilai', 'arrnilai'));
});

/* Foreach */
Route::get('/mahasiswa/fe1', function () {
    $nama = "muhammad rieki hredaya";
    $nilai = 75;
    $arrnilai = [75, 80, 20, 90];
    return view('mahasiswa', compact('nama', 'nilai', 'arrnilai'));
});

/* @continue */
Route::get('/mahasiswa/con', function () {
    $nama = "muhammad rieki hredaya";
    $nilai = 75;
    $arrnilai = [75, 80, 20, 90];
    return view('mahasiswa', compact('nama', 'nilai', 'arrnilai'));
});
