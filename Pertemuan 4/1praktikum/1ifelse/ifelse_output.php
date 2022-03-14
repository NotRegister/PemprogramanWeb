<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>if else</h3>
    <?php
    $nama = $_POST['nama'];
    $jumlah = $_POST['jumlah'];
    if ($jumlah >= 3) {
        echo "Selamat datang $nama, anda membeli $jumlah gpu dan mendapatkan diskon sebesar 20%";
    } elseif ($jumlah == 2) {
        echo "Selamat datang $nama, anda membeli $jumlah gpu dan mendapatkan diskon sebesar 10%";
    } else {
        echo "Selamat datang $nama, anda tidak mendapatkan diskon";
    }

    ?>
    <h3>switch case</h3>
    <?php
    if (isset($_POST['submit'])) {
        switch ($_POST['gender']) {
            case 'laki':
                echo "Siab bang laki laki";
                break;
            case 'perempuan':
                echo "Siab mbak perempuan";
                break;

            default:
                echo "Anda tidak punya gender!?!?!?!?";
                break;
        }
    }
    ?>

    <h3>For Loop</h3>
    <?php
    if (isset($_POST['submit'])) {
        $item = $_POST['item'];
        for ($i = 1; $i <= $item; $i++) {
            echo "Sedang dipesan item ke-". $i ."<br>";
        }
    }
    ?>

    <h3>Nested loop</h3>
    <?php 
        if (isset($_POST['submit'])) {
        $item = $_POST['item'];
        for ($i = 1; $i <= $item; $i++) {
            echo "Sedang dipesan item ke-". $i ."<br>";
            for ($j = 1; $j <= $i; $j++) {
                echo "Pesanan ke-". $j ."<br>";
            }
        }
    }
    
    ?>
</body>

</html>