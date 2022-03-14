<!DOCTYPE html>
<html lang="en">
    <?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header("Location: formlogin_login.php");
    }
    ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Selamat datang <?php echo $_SESSION['username']; ?></h2>
    <a href="formlogin_logoutproses.php">logout</a>
</body>

</html>