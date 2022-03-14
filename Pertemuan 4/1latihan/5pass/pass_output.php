<?php 
    //post get username password
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username == "RiekiHredaya" && $password == "12345") {
        echo "<h3>Selamat Datang $username Login Berhasil</h3> ";
    } else {
        echo "<h3>Username atau Password Salah</h3>";
    }

    if (isset($_POST['reset'])) {
        ("pass_input.php");
    }
?>