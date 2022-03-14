@extends('mahasiswa.layout')

@section('content')
    <?php Route::resource('mahasiswas', 'MahasiswaController');
    ?>
    <nav class="navbar navbar-expand-sm navbar-light " style="background-color: #B5F44A;">
        <div class="container-fluid">
            <a class="navbar-brand mb-0 h1" href="#" style="font-family: Display Georgia, Georgia">Rieki Hredaya</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#car">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#ps">Photoshop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#ill">Adobe Illustrator</a>
                    </li>
                </ul>
                <a class="btn btn-outline-dark" role="button" href="{{ route('mahasiswas') }}">CRUD Page</a>
            </div>
        </div>
    </nav>

    <div class="container pt-4 ps-4">
        <h2 class="pb-2" id="ps">Adobe Photoshop</h2>
        <div class="row">
            <div class="col-sm">
                <div class="card" style="width: 18rem;">
                    <img src="{{ URL::to('/assets/img/semangka.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Ini merupakan salah satu contoh dari hasil design saya di Adobe Photoshop.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm">

                <div class="card" style="width: 18rem;">
                    <img src="{{ URL::to('/assets/img/semangka.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Ini merupakan salah satu contoh dari hasil design saya di Adobe Photoshop.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm">

                <div class="card" style="width: 18rem;">
                    <img src="{{ URL::to('/assets/img/semangka.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Ini merupakan salah satu contoh dari hasil design saya di Adobe Photoshop.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm">

                <div class="card" style="width: 18rem;">
                    <img src="{{ URL::to('/assets/img/semangka.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Ini merupakan salah satu contoh dari hasil design saya di Adobe Photoshop.
                        </p>
                    </div>
                </div>
            </div>


        </div>

        <h2 class="pb-2" id="ill">Adobe Illustrator</h2>
        <div class="row">
            <div class="col-sm">
                <div class="card" style="width: 18rem;">
                    <img src="{{ URL::to('/assets/img/benefit.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Ini merupakan salah satu contoh dari hasil design saya di Adobe
                            Illustrator.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm">

                <div class="card" style="width: 18rem;">
                    <img src="{{ URL::to('/assets/img/benefit.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Ini merupakan salah satu contoh dari hasil design saya di Adobe
                            Illustrator.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm">

                <div class="card" style="width: 18rem;">
                    <img src="{{ URL::to('/assets/img/benefit.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Ini merupakan salah satu contoh dari hasil design saya di Adobe
                            Illustrator.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm">

                <div class="card" style="width: 18rem;">
                    <img src="{{ URL::to('/assets/img/benefit.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Ini merupakan salah satu contoh dari hasil design saya di Adobe
                            Illustrator.</p>
                    </div>
                </div>
            </div>


        </div>

    </div>

    <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
        <a class="btn-floating btn-lg red">
            <i class="fas fa-pencil-alt"></i>
        </a>

        <ul class="list-unstyled">
            <li><a class="btn-floating red"><i class="fas fa-star"></i></a></li>
            <li><a class="btn-floating yellow darken-1"><i class="fas fa-user"></i></a></li>
            <li><a class="btn-floating green"><i class="fas fa-envelope"></i></a></li>
            <li><a class="btn-floating blue"><i class="fas fa-shopping-cart"></i></a></li>
        </ul>
    </div>
@endsection
