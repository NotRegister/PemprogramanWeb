<!doctype html>
<html lang="en">

<head>
    <title>tugas2</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .carousel-item {
            height: 40rem;
            background: #000;
            position: relative;
        }

        .c-img {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            background-position: center;
            background-size: cover;
            opacity: 0.7;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ffd166;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">BBS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">PRODUK</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            KATEGORI
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #ffafcc;">
                            <li><a class="dropdown-item" href="#">PRIA</a></li>
                            <li><a class="dropdown-item" href="#">WANITA</a></li>
                            <li><a class="dropdown-item" href="#">ANAK-ANAK</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">KERANJANG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CHAT</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <ul class="navbar-nav d-flex">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            PROFIL
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #ffafcc;">
                            <li><a class="dropdown-item" href="#">TRANSAKSI</a></li>
                            <li><a class="dropdown-item" href="#">ULASAN</a></li>
                            <li><a class="dropdown-item" href="#">SETTING</a></li>
                        </ul>
                    </li>
                    <img src="profil.jfif" alt="" class="" style="vertical-align: middle; width: 50px; height: 50px; border-radius: 50%;">
                </ul>
            </div>
        </div>
    </nav>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" >
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner ">
            <div class="carousel-item active">
                <div class="c-img" style="background-image: url(./img/gambar1.JPG);"></div>
            </div>
            <div class="carousel-item">
                <div class="c-img" style="background-image: url(./img/gambar1.JPG);"></div>
            </div>
            <div class="carousel-item">
                <div class="c-img" style="background-image: url(./img/gambar1.JPG);"></div>
            </div>
            <div class="carousel-item">
                <div class="c-img" style="background-image: url(./img/gambar1.JPG);"></div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container-fluid py-5" style="background-color: #ffd166;">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>Product</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <img src="1.jpg" alt="" class="">
                </div>
                <div class="col-sm">
                    <img src="1.jpg" alt="" class="">
                </div>
                <div class="col-sm">
                    <img src="1.jpg" alt="" class="">
                </div>
                <div class="col-sm">
                    <img src="1.jpg" alt="" class="">
                </div>
                <div class="col-sm">
                    <img src="1.jpg" alt="" class="">
                </div>
                <div class="col-sm">
                    <img src="1.jpg" alt="" class="">
                </div>
            </div>
            <div class="row my-3">
                <div class="col-sm">
                    <img src="5.jpg" alt="" class="">
                </div>
                <div class="col-sm">
                    <img src="5.jpg" alt="" class="">
                </div>
                <div class="col-2">
                    <img src="5.jpg" alt="" class="">
                </div>
                <div class="col-2">
                    <img src="5.jpg" alt="" class="">
                </div>
                <div class="col-2">
                    <img src="5.jpg" alt="" class="">
                </div>
                <div class="col-2">
                    <img src="5.jpg" alt="" class="">
                </div>
            </div>
            <div class="row my-3">
                <div class="col-2">
                    <img src="6.jpg" alt="" class="">
                </div>
                <div class="col-2">
                    <img src="6.jpg" alt="" class="">
                </div>
                <div class="col-sm">
                    <img src="6.jpg" alt="" class="">
                </div>
                <div class="col-sm">
                    <img src="6.jpg" alt="" class="">
                </div>
                <div class="col-sm">
                    <img src="6.jpg" alt="" class="">
                </div>
                <div class="col-sm">
                    <img src="6.jpg" alt="" class="">
                </div>
            </div>
            <div class="row my-3">
                <div class="col-sm">
                    <img src="3.jpg" alt="" class="">
                </div>
                <div class="col-sm">
                    <img src="3.jpg" alt="" class="">
                </div>
                <div class="col-sm">
                    <img src="3.jpg" alt="" class="">
                </div>
                <div class="col-sm">
                    <img src="3.jpg" alt="" class="">
                </div>
                <div class="col-sm">
                    <img src="3.jpg" alt="" class="">
                </div>
                <div class="col-sm">
                    <img src="3.jpg" alt="" class="">
                </div>
            </div>
            <div class="row my-3">
                <div class="col-sm">
                    <img src="4.jpg" alt="" class="">
                </div>
                <div class="col-sm">
                    <img src="4.jpg" alt="" class="">
                </div>
                <div class="col-sm">
                    <img src="4.jpg" alt="" class="">
                </div>
                <div class="col-sm">
                    <img src="4.jpg" alt="" class="">
                </div>
                <div class="col-sm">
                    <img src="4.jpg" alt="" class="">
                </div>
                <div class="col-sm">
                    <img src="4.jpg" alt="" class="">
                </div>
            </div>
        </div>
    </div>
    <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color: #cddafd;">
                    Cara Pembelian
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">berisi langkah-langkah untuk melakukan pembelian secara online</div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo" style="background-color: #bee1e6;">
                    Ketentuan Pembelian
                </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">persyaratan dalam melakukan pembelian, seperti jika barang yang datang tidak sesuai
                    pesanan dapat dikembalikan dalam jangka waktu berapa hari</div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree" style="background-color: #adc178;">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree" style="background-color: #fde2e4;">
                    Pusat Bantuan
                </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">tampat user mencari solusi mengenai masalah yang dialami dalam menggunakan web
                    <code>link bantuan</code>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>