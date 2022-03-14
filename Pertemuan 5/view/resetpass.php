<?php 
$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$db_name = "modul5";
$connection = mysqli_connect($host_db, $user_db, $pass_db, $db_name);

if (!isset($_GET['code'])) {
    echo"<script>alert('Kode tidak ditemukan');</script>";
    header("Location:login");
}

$code = $_GET['code'];

$query1 = mysqli_query($connection, "SELECT * FROM tb_reset WHERE code = '$code'");

if (mysqli_num_rows($query1) == 0) {
    echo"<script>alert('Kode tidak ditemukan'); </script>";
    header("Location:login.php");
}

if (isset($_POST['newpassword'])) {
    $pass = $_POST['newpassword'];
    $pass = md5($pass);

    $row = mysqli_fetch_array($query1);
    $email = $row['email'];

    $query2 = mysqli_query($connection, "UPDATE tb_user SET password = '$pass' WHERE email = '$email'");
    
    if ($query2) {
        $query2 = mysqli_query($connection, "DELETE FROM tb_reset WHERE code = '$code'");
        echo"<script>alert('Password berhasil diubah'); </script>";
        header("location:../view/login.php");
    } else {
        echo"<script>alert('Password gagal diubah'); </script>";
        header("location:../view/login.php");
    }
}
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
        <div class="row">
            <div class="col-md-8 offset-md-2 mt-4">
                <div class="card">
                    <div class="card-header">
                        RESET PASSWORD
                    </div>
                    <div class="card-body mb-2">
                        <form action="" method="POST">

                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" name="newpassword" placeholder="Masukkan password baru" value="" class="form-control mb-2">
                            </div>
                            <button type="submit" name="update" class="btn btn-success mt-3">Update Password</button>

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