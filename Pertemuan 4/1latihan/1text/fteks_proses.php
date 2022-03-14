<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>proses</title>
</head>

<body>

    <?php
    if (isset($_POST['Submit'])) {
        $saudara1 = $_POST['saudara1'];
        $saudara2 = $_POST['saudara2'];
        $saudara3 = $_POST['saudara3'];
        $saudara4 = $_POST['saudara4'];
        echo "<h3>Nama saudara</h3>";
        echo $saudara1 . "<br>";
        echo $saudara2 . "<br>";
        echo $saudara3 . "<br>";
        echo $saudara4 . "<br>";
    } else {
        echo "anda belum mengisi form";
    }
    ?>
</body>

</html>