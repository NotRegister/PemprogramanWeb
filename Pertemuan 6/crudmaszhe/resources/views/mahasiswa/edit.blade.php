@extends('mahasiswa.layout')

@section('content')
    <div class=" row">
        <div class="col-md-8 offset-md-2 mt-4">
            <div class="card">
                <div class="card-header">
                    TAMBAH MAHASISWA
                </div>
                <div class="card-body mb-2 mt-2">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mt-3">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('mahasiswas.update', $mahasiswa->id) }}" method="post">
                        <div class="form-group">
                            @csrf
                            @method('PATCH')
                            <label>NIM</label>
                            <input type="number" name="nim" placeholder="Masukkan NIM mahasiswa" class="form-control mb-2" value="{{ $mahasiswa->nim }}">
                        </div>

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" placeholder="Masukkan Nama mahasiswa" class="form-control mb-2" value="{{ $mahasiswa->nama }}">
                        </div>
                        <div class="form-group">
                            <label>Offering</label>
                            <input type="text" name="offering" placeholder="Masukkan Prodi mahasiswa" class="form-control mb-2" value="{{ route('mahasiswas.update', $mahasiswa->id) }}">
                        </div>

                        <button type="submit" name="submit" class="btn btn-success mt-3">Update</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
