<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Checkbox jurusan yang terpilih</h3>
    <?php
    if (isset($_POST['submit'])) {
        if (!empty($_POST['jurusan'])) {
            foreach ($_POST['jurusan'] as $value) {
                echo $value . "<br>";
            }
        }
    } else {
        echo "anda belum mengisi checkbox";
    }
    ?>

</body>

</html>