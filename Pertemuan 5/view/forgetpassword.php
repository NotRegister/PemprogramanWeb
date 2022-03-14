<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

//* Koneksi ke database 
$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$db_name = "modul5";
$tbl_name = "tb_reset";
$connection = mysqli_connect($host_db, $user_db, $pass_db, $db_name);

$err = "";
$bnr = "";

if (isset($_POST['email'])) {
    $mail = new PHPMailer(true);
    $emailTo = $_POST['email'];
    $code = uniqid(true);

    $sql = "INSERT INTO $tbl_name (code, email) VALUES ('$code', '$emailTo')";
    $result = mysqli_query($connection, $sql);

    try {
        //Server settings
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'hredayaaa@gmail.com';                     //SMTP username
        $mail->Password   = 'bqsozlpoprjuxuia';                               //SMTP password
        $mail->SMTPSecure = "tls";            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('hredayaaa@gmail.com', 'Pemprograman Web - Reset Password');
        $mail->addAddress($emailTo);
        $mail->addReplyTo('no-reply-rieki@gmail.com', 'Information');

        //Content
        $url = "http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . "/resetpass?code=$code";

        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Reset Password Link';
        $mail->Body    = "<h1>Reset password anda menggunakan link dibawah ini</h1> click <a href='$url'>here</a> to reset";
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        $bnr .= "Link reset password telah dikirim ke $emailTo ";
    } catch (Exception $e) {
        $err .= "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
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
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
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
            <h1 class="h3 mb-3 fw-normal">Please input your Email</h1>
            
            <?php if ($bnr) { ?>
                <div id="login-alert" class="alert alert-primary col-sm-12 mt-2 mb-2">
                    <?php echo $bnr ?>
                </div>
            <?php } else if ($err) { ?>
                <div id="login-alert" class="alert alert-danger col-sm-12 mt-2 mb-2">
                    <?php echo $err ?>
                </div>
            <?php } ?>

            <div class="form-floating mb-3">
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="yourname@gmail.com">
                <label for="floatingInput">Email address</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary mb-3" type="submit" name="forgetpassword">Forget Password</button>
            <a href="../view/login">Back to login</a>
            <p class="mt-5 mb-3 text-muted">&copy; 2020 season 3</p>
        </form>
    </main>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>