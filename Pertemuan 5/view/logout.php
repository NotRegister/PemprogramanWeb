<?php
session_start();
$_SESSION['session_email'] = "";
$_SESSION['session_password'] = "";
session_destroy();

$cookie_name = "cookie_email";
$cookie_value = "";
$cookie_time = time() - (60 * 60 );
setcookie($cookie_name, $cookie_value, $cookie_time, "/");

$cookie_name = "cookie_password";
$cookie_value = "";
$cookie_time = time() - (60 * 60 );
setcookie($cookie_name, $cookie_value, $cookie_time, "/");

header("location:../view/login.php");
?>

<!-- 
    menggunakan bootstrap, url menggunakan .htaccess, table menggunakan data table

    Tugas praktikum
    1. Update / edit tapi nim tidak bisa diedit
    2. 
-->