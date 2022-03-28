<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Routing\Controller as Controller;

class CollectionController extends Controller
{
    public function excercise()
    {
        $matkul100 = new \stdClass();
        $matkul100->namaMatkul = "Sistem Operasi";
        $matkul100->jumlahSks = 3;
        $matkul100->semester = 3;

        $matkul101 = new \stdClass();
        $matkul101->namaMatkul = "Algoritma dan Pemrograman";
        $matkul101->jumlahSks = 4;
        $matkul101->semester = 1;

        $matkul102 = new \stdClass();
        $matkul102->namaMatkul = "Kalkulus Dasar";
        $matkul102->jumlahSks = 2;
        $matkul102->semester = 1;

        $matkul103 = new \stdClass();
        $matkul103->namaMatkul = "Basis Data";
        $matkul103->jumlahSks = 2;
        $matkul103->semester = 3;

        $matkuls = collect([$matkul100, $matkul101, $matkul102, $matkul103]);
    }

    public function collectionsatu()
    {
        $matkul100 = new \stdClass();
        $matkul100->namaMatkul = "Sistem Operasi";
        $matkul100->jumlahSks = 3;
        $matkul100->semester = 3;

        $matkul101 = new \stdClass();
        $matkul101->namaMatkul = "Algoritma dan Pemrograman";
        $matkul101->jumlahSks = 4;
        $matkul101->semester = 1;

        $matkul102 = new \stdClass();
        $matkul102->namaMatkul = "Kalkulus Dasar";
        $matkul102->jumlahSks = 2;
        $matkul102->semester = 1;

        $matkul103 = new \stdClass();
        $matkul103->namaMatkul = "Basis Data";
        $matkul103->jumlahSks = 2;
        $matkul103->semester = 3;

        $matkuls = collect([$matkul100, $matkul101, $matkul102, $matkul103]);

        $hasil = $matkuls->filter(function ($val, $key) {
            return $val->semester == 3;
        });
        $tampil = "";
        foreach ($hasil as $key => $value) {
            $tampil .= $value->namaMatkul . ", ";
        }
        $tampil = rtrim($tampil, ", ");
        echo "Nama mata kuliah di semester 3: " . $tampil;
    }

    public function collectiondua()
    {
        $matkul100 = new \stdClass();
        $matkul100->namaMatkul = "Sistem Operasi";
        $matkul100->jumlahSks = 3;
        $matkul100->semester = 3;

        $matkul101 = new \stdClass();
        $matkul101->namaMatkul = "Algoritma dan Pemrograman";
        $matkul101->jumlahSks = 4;
        $matkul101->semester = 1;

        $matkul102 = new \stdClass();
        $matkul102->namaMatkul = "Kalkulus Dasar";
        $matkul102->jumlahSks = 2;
        $matkul102->semester = 1;

        $matkul103 = new \stdClass();
        $matkul103->namaMatkul = "Basis Data";
        $matkul103->jumlahSks = 2;
        $matkul103->semester = 3;

        $matkuls = collect([$matkul100, $matkul101, $matkul102, $matkul103]);
        $hasil = $matkuls->sortByDesc('jumlahSks');
        $tampil = "";
        foreach ($hasil as $key => $value) {
            $tampil .= $value->namaMatkul . " (" . $value->jumlahSks . "), ";
        }
        $tampil = rtrim($tampil, ", ");
        echo "Nama mata kuliah: " . $tampil;
    }
}
