<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Routing\Controller as BaseController;

class PageController extends BaseController
{
    public function index()
    {
        return "Halaman Home";
    }

    public function tampil()
    {
        return "Halaman Mahasiswa";
    }

    public function tampilmaha()
    {
        $arrMahasiswa = [
            "Risa Lestari", "Rudi Hermawan", "Bambang Kusumo",
            "Lisa Permata"
        ];
        return view('mahasiswa')->with('mahasiswa', $arrMahasiswa);
    }

    public function cobafacade()
    {
        echo \Illuminate\Support\Str::snake('SedangBelajarlaravelUncover');
        echo "<br>";
        echo \Illuminate\Support\Str::kebab('SedangBelajarLaravelUncover');
    }

    public function cobafacade2()
    {
        echo Str::snake('SedangBelajarLaravelUncover');
        echo "<br>";
        echo Str::kebab('SedangBelajarLaravelUncover');
    }
}
