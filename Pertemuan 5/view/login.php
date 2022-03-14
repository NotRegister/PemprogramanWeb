<?php

session_start();
error_reporting(error_reporting() & ~E_NOTICE);


//* Mengatur koneksi ke database
$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$db_name = "modul5";
$tbl_name = "tb_user";
$connection = mysqli_connect($host_db, $user_db, $pass_db, $db_name);
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

//* mengatur variabel
$err = "";
$email = "";
$remember = "";

if (isset($_COOKIE['session_email'])) {
    $cookie_email = $_COOKIE['cookie_email'];
    $cookie_password = $_COOKIE['cookie_password'];

    $sql = "SELECT * FROM tb_user WHERE email = '$cookie_email' ";
    $result = mysqli_query($connection, $sql);
    $row = mysqli_fetch_array($result);

    if ($row['password'] == $cookie_password) {
        $_SESSION['session_email'] = $cookie_email;
        $_SESSION['session_password'] = $cookie_password;
    }
}

if (isset($_SESSION['session_email'])) {
    header("location:../view/backend");
    exit();
}


if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $remember = $_POST['remember'];

    if ($email == '' or $password == '') {
        $err .= "Email atau Password tidak boleh kosong";
    } else {
        $sql = "SELECT * FROM tb_user WHERE email = '$email'";
        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_array($result);

        if ($row['email'] == '') {
            $err .= "<li>email $email tidak tersedia</li>";
        } else if ($row['password'] != md5($password)) {
            $err .= "<li>password $password Salah</li>";
        }

        if (empty($err)) {
            $_SESSION['session_email'] = $email;
            $_SESSION['session_password'] = $password;

            //! Jika click checkbox ingat akan melakukan hal dibawah ini
            if ($remember == "1") {
                //* set cookies email
                $cookie_name = "cookie_email";
                $cookie_value = $email;
                $cookie_time = time() + (60 * 60 * 24 * 30);
                setcookie($cookie_name, $cookie_value, $cookie_time, "/");

                //* set cookies password
                $cookie_name = "cookie_password";
                $cookie_value = md5($password);
                $cookie_time = time() + (60 * 60 * 24 * 30);
                setcookie($cookie_name, $cookie_value, $cookie_time, "/");
            } else {
                echo "Unchecked";
            }
            header("location:backend");
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../style/login.css" rel="stylesheet">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>

<body class="text-center">

    <main class="form-signin">
        <form action="" method="POST">
            <img class="mb-4" src="../img/rieki.png" alt="" width="72" height="72">
            <h1 class="h3 mb-3 fw-normal">Please Login</h1>

            <?php if ($err) { ?>
                <div id="login-alert" class="alert alert-danger col-sm-12">
                    <?php echo $err ?>
                </div>
            <?php } ?>

            <div class="form-floating"> 
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" name="remember" value="1" <?php if ($remember == 1){ echo "Checked";} else if ($remember == 0){ echo "unchecked"; } ?>> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary mb-3" type="submit" name="login">Login</button>
            <a class="mt-3" href="./forgetpassword">Forget your password?</a>
            <p class="mt-5 mb-3 text-muted">&copy; 2020 season 3</p>
        </form>
    </main>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>