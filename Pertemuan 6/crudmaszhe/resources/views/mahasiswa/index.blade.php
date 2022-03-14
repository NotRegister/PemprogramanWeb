@extends('mahasiswa.layout')

@section('content')
    <div class="container pt-5">
        <?php  ?>
        <h1 class="text-center mb-5">Tabel Mahasiswa</h1>
        <center class="mb-3">
            <a href="{{ route('mahasiswas.create') }}" class="btn btn-lg btn-primary mb-4">TAMBAH MAHASISWA</a>
        </center>
        <table id="tabel-data">
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Offering</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswas as $mahasiswa)
                    <tr>
                        <td>{{ $mahasiswa->nim }}</td>
                        <td>{{ $mahasiswa->nama }}</td>
                        <td>{{ $mahasiswa->offering }}</td>
                        <td>
                            <a href="{{ route('mahasiswas.edit', $mahasiswa->id) }}"
                                class="btn btn-sm btn-warning">Edit</a>

                            <form action="{{ route('mahasiswas.destroy', $mahasiswa->id) }}" method="post"
                                class="d-inline">
                                @csrf
                                @method('delete')
                                <button class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>

            <script>
                $(document).ready(function() {
                    $('#tabel-data').DataTable();
                });
            </script>

        </table>
    </div>
@endsection
