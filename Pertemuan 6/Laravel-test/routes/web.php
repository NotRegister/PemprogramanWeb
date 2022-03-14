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

Route::get('bahaya', function () {
    return view('mahasiswa.berad');
    // atau
    // return view('mahasiswa/berad');
});

//* ========================================================================
//* Latihan Mengirimkan data ke view sebagai argument
//* ========================================================================


//! ==========================
//! contoh route kirim data #1
//! ==========================

/* Route::get('/mahasiswa', function () {
    return view('mahasiswa.berad', ["mhs1" => "bhudi"]);
});
 */
//! ==========================
//! contoh route kirim data #2
//! ==========================
Route::get('/mahasiswa2', function () {
    $arrMhs = ["Budi", "Rani", "Rizki", "Lisa whitepink arr"];
    return view('mahasiswa.berad', [
        "mhs1" => "Budi",
        "mhs2" => "Rani",
        "mhs3" => "Rizki",
        "mhs4" => "Lisa whitepink",
    ],['arrMhs' => $arrMhs]);
});

//! ==========================
//! contoh route kirim data #3
//! ==========================
Route::get('/mahasiswa3', function () {
    $arrMhs = ["Budi", "Rani", "Rizki", "Lisa whitepink"];
    return view('mahasiswa.berad',['arrMhs' => $arrMhs]);
});

//! ==============================
//! contoh route Function Compact
//! ==============================

Route::get('/mahasiswaCompact', function () {
    $mhs1 = "Budi Compact";
    $mhs2 = "Rani Compact";
    $mhs3 = "Rizki Compact";
    $mhs4 = "Lisa whitepink Compact";
    $arrMhs = ["Budi", "Rani", "Rizki", "Lisa whitepink"];
    return view('mahasiswa.berad',/* saya beri array agar tidak error */['arrMhs' => $arrMhs])->with(compact("mhs1", "mhs2", "mhs3", "mhs4"));
});


//* ====================================================================
//* Latihan Route
//* ====================================================================

Route::get('/hello', function () {
    return 'Hello World';
    // return view('rieki');
});

Route::get('/belajar', function () {
    echo "<h1>belajar laravel</h1>";
    echo "<p>Sedang belajar laravel</p>";
});

Route::get('/mahasiswa/fakultas-teknik/teknik-informatika', function () {
    echo "<h1>teknik informatika</h1>";
    echo "<p>1. Rieki</p>";
    echo "<p>2. Rizki</p>";
    echo "<p>3. Rizky</p>";
});

//! ======================
//! route parameter
//! ======================
Route::get('mahasiswa/{nama}', function ($nama) {
    echo "<h1>Halo, nama saya $nama</h1>";
});

Route::get('mahasiswa/{nama}/{alamat}', function ($nama, $alamat) {
    echo "<h1>Halo, nama saya $nama dan alamat saya di $alamat</h1>";
});

//* atau bisa seperti dibawah ini tidak masalah karena yg dibutuhkan laravel hanya urutan variabel saja

Route::get('mahasiswa/{nama}/{alamat}', function ($a, $b) {
    echo "<h1>Halo, nama saya $a dan alamat saya di $b</h1>";
});

//! ==========================
//! route optional parameter
//! ==========================

Route::get('/stock_barang/{jenis?}/{merek?}', function (/*seperti memberikan nilai default jika tidak diisi */$jenis = 'Smartphone', $merek = 'Sumsang') {
    echo "<h1>Stock Barang</h1>";
    echo "<p>Jenis : $jenis</p>";
    echo "<p>Merek : $merek</p>";
});

//! ==========================
//! route regular expression
//! ==========================

Route::get('users/{id}', function ($id) {
    echo "User ID: $id";
})->where('id', '[0-9]+');

Route::get('users/{nama}/{id}', function ($nama, $id) {
    echo "User ID: $id dan Nama : $nama";
})->where('id', '[A-Z]{2}[0-9]+'); //diawali dengan 2 huruf besar, lalu diikuti dengan 1 atau lebih angka

//! ==========================
//! route Redirect
//! ==========================

Route::redirect('/rieki', '/mahasiswa/rieki', 301);

//! ==========================
//! route group
//! ==========================

/*
    Daripada menuliskan seperti dibawah ini kita dapat menggunakan group route

    Route::get('/admin/mahasiswa', function () {
        return "<h1>Daftar mahasiswa</h1>";
    });

    Route::get('/admin/dosen', function () {
        return "<h1>Daftar dosen</h1>";
    });

    Route::get('/admin/karyawan', function () {
        return "<h1>Daftar karyawan</h1>";
    });
*/

Route::prefix('/admin')->group(function () {
    Route::get('/mahasiswa', function () {
        return "<h1>Daftar mahasiswa</h1>";
    });

    Route::get('/dosen', function () {
        return "<h1>Daftar dosen</h1>";
    });

    Route::get('/karyawan', function () {
        return "<h1>Daftar karyawan</h1>";
    });
});

//! ===========================================
//! route fallback / seperti custom 404 page
//! ===========================================

Route::fallback(function () {
    return view('errors/404');
});

//! ==========================
//! route priority
//! ==========================

Route::get('buku/{a}', function ($a) {
    return "Buku ke-$a";
});
Route::get('buku/{b}', function ($b) {
    return "Buku saya ke-$b";
});
Route::get('buku/{c}', function ($c) {
    return "Buku kita ke-$c";
});
