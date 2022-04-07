<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MahasiswaController extends Controller
{
    public function index()
    {
        return view('form-pendaftaran');
    }

    public function prosesForm(Request $request)
    {
        // tanpa validate
        echo "tanpa menggunakan validate <br>";
        echo "NIM : " . $request->nim . "<br>";
        echo "Nama : " . $request->nama . "<br>";
        echo "Email : " . $request->email . "<br>";
        echo "Jenis Kelamin : " . $request->jenis_kelamin . "<br>";
        echo "Jurusan : " . $request->jurusan . "<br>";
        echo "Alamat : " . $request->alamat . "<br>";
    }

    public function prosesValidate(Request $request)
    {
        $validateData = $request->validate([
            'nim' => 'required|size:12',
            'nama' => 'required||min:3|max:50',
            'email' => 'required|email',
            'jenis_kelamin' => 'required|in:P,L',
            'jurusan' => 'required',
            'alamat' => ''
        ]);
        dump($validateData);

        echo "menggunakan validate <br><br>";
        echo $validateData['nim'] . "<br>";
        echo $validateData['nama'] . "<br>";
        echo $validateData['email'] . "<br>";
        echo $validateData['jenis_kelamin'] . "<br>";
        echo $validateData['jurusan'] . "<br>";
        echo $validateData['alamat'] . "<br>";
    }

    public function prosesFromValidator(Request $request)
    {
        $rules = [
            'nim' => 'required |size:12',
            'nama' => 'required min:3|max:50',
            'email' => 'required|email',
            'jenis_kelamin' => 'required|in:P,L',
            'jurusan' => 'required',
            'alamat' => ''
        ];

        $error = [
            'required' => ':attribute wajib diisi.',
            'size' => ': attribute harus berukuran :size karakter.',
            'max' => ':attribute maskimal berisi :max karakter.',
            'min' => ':attribute minimal berisi :min karakter.',
            'email' => ':harus diisi dengan alamat email yang valid.',
            'in' => ':attribute yang dipilih tidak valid.',
        ];

        $validator = Validator::make($request->all(), $rules, $error);

        if ($validator->fails()) {
            return redirect('/')->withErrors($validator)->withInput();
        } else {
            echo $request->nim . "<br>";
            echo $request->nama. "<br>";
            echo $request->email. "<br>";
            echo $request->jenis_kelamin. "<br>";
            echo $request->jurusan. "<br>";
            echo $request->alamat;
        }
    }
}
