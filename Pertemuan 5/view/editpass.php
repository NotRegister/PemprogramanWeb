<?php 
    $host_db = "localhost";
    $user_db = "root";
    $pass_db = "";
    $db_name = "modul5";
    $table_name = "tb_user";
    $connection = mysqli_connect($host_db, $user_db, $pass_db, $db_name);
    
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $email = $_GET['email'];
    
    $sql = "SELECT * FROM $table_name WHERE email='$email'";
    $query = mysqli_query($connection, $sql);
    $row = mysqli_fetch_array($query);
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
                        EDIT PASSWORD
                    </div>
                    <div class="card-body mb-2">
                        <form action="../editpassword" method="POST">

                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" value="<?php echo $row['email']?>" placeholder="Masukkan Email " class="form-control mb-2" readonly>
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" name="password" placeholder="Masukkan Nama " value="" class="form-control mb-2">
                            </div>
                            <button type="submit" name="edit" class="btn btn-success mt-3">EDIT</button>

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