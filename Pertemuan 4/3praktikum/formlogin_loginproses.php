<?php
    session_start();
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username == "rieki" && $password == "admin") {
        session_start();
        $_SESSION['username'] = $username;
        header('location: formlogin_view.php');
    } else {
        header('location: formlogin_login.php');
    }

?>
