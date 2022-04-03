<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index()
    {
        return "Berhasil di Proses";
    }
    public function insertSql()
    {
        $result = DB::insert("insert into mahasiswas (nim, nama, tanggal_lahir, ipk) values ('21053560', 'Sari Citra Lestari','1999-12-12', '3.5')");

        dump($result);
    }
    public function insertTimestamp()
    {
        $result = DB::insert("insert into mahasiswas (nim, nama, tanggal_lahir, ipk, created_at, updated_at) values ('21053561', 'Sari Citra Lestari','1999-12-12', '3.5', now(), now())");

        dump($result);
    }
    public function insertPrepared()
    {
        $result = DB::insert("INSERT INTO mahasiswas (nim, nama,
        tanggal_lahir, ipk, created_at, updated_at) VALUES (?,?,?,?,?,?)", [
            '18012012', 'James Situmorang',
            '1999-04-02', 2.7, now(), now()
        ]);
        dump($result);
    }
    public function insertBinding()
    {
        $result = DB::insert(
            "INSERT INTO mahasiswas (nim, nama, tanggal_lahir, ipk, created_at, updated_at)
            VALUES (:nim, :nama, :tgl, :ipk, :created, :updated)",
            [
                'nim' => '19005011',
                'nama' => 'Riana Putria',
                'tgl' => '2000-11-23',
                'ipk' => 2.7,
                'created' => now(),
                'updated' => now(),
            ]
        );
        dump($result);
    }
    public function update()
    {
        $result = DB::update("UPDATE mahasiswas SET created_at = now(),updated_at = now() WHERE nim = ?", ['21053561']);
        dump($result);
    }

    public function delete()
    {
        $result = DB::delete(
            "DELETE from mahasiswas where nama = ?",
            ['James Situmorang']
        );
        dump($result);
    }

    public function select()
    {
        $result = DB::select("SELECT * FROM mahasiswas");
        dump($result);
    }

    public function selectTampil()
    {
        $result = DB::select("SELECT * FROM mahasiswas");
        foreach ($result as $row) {
            echo $row->id . ". " .  $row->nim . " " . $row->nama . " " . $row->tanggal_lahir . " " . $row->ipk . "<br>";
        }
    }

    public function selectView(){
        $result = DB::select("SELECT * FROM mahasiswas");
        return view('tampil-mahasiswa', ['mahasiswas' => $result]);
    }

    public function selectWhere(){
        $result = DB::select("SELECT * FROM mahasiswas WHERE ipk > ? ORDER BY nama ASC", [3]);
        return view('tampil-mahasiswa', ['mahasiswas' => $result]);
    }

    public function statement(){
        $result = DB::statement("TRUNCATE mahasiswas");
        return('TABEL MAHASISWAS SUDAH DIKOSONGKAN');
    }
}
