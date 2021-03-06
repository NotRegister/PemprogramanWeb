<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>@yield('title')</title>
    <style>
        footer {
            position: fixed;
            bottom: 0px;
            text-align: center;
            width: 100%
        }

    </style>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link @yield('acMahasiswa')" href="/mahasiswa/ex3">Data Mahasiswa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @yield('acDosen')" href="/dosen/ex3">Data Dosen</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @yield('acGallery')" href="/gallery/ex3">Gallery</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @yield('acAdmin')" href="/admin">Admin</a>
            </li>
        </ul>
    </nav>

    @section('content')
        <div class="alert alert-primary text-center">Sistem Informasi Mahasiswa</div>
    @show

    <footer class="bg-dark py-3 text-white mt-4">
        <div class="container">
            Sistem Informasi Mahasiswa | Copyright © {{ date('Y') }}
        </div>
    </footer>
</body>

</html>
