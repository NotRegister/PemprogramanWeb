<?php

?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.1.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <div class="container" class="mt-5">
        <div class=" row">
            <div class="col-md-8 offset-md-2 mt-4">
                <div class="card">
                    <div class="card-header">
                        TAMBAH MAHASISWA
                    </div>
                    <div class="card-body mb-2">
                        <form action="../createmaha.php" method="POST">

                            <div class="form-group">
                                <label>NIM</label>
                                <input type="number" name="nim" placeholder="Masukkan NIM " class="form-control mb-2" >
                            </div>

                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" placeholder="Masukkan Nama " class="form-control mb-2">
                            </div>
                            <div class="form-group">
                                <label>Prodi</label>
                                <input type="text" name="prodi" placeholder="Masukkan Prodi " class="form-control mb-2">
                            </div>

                            <button type="submit" name="submit" class="btn btn-success mt-3">REGISTER</button>
                            <a href="./tambahmaha.php" class="btn btn-warning mt-3">RESET</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>