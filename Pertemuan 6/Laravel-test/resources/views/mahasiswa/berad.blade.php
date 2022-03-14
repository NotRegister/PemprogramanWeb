<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h3>Contoh 1</h3>
    <ol>
        <li><?php echo $mhs1; ?></li>
        <li>Rani</li>
        <li>Rizki</li>
        <li>Lisa whitepink</li>
    </ol>

    <h3>Contoh 2</h3>
    <ol>
        <li><?php echo $mhs1; ?></li>
        <li><?php echo $mhs2; ?></li>
        <li><?php echo $mhs3; ?></li>
        <li><?php echo $mhs4; ?></li>
    </ol>

    <h3>Contoh 3</h3>
    <ol>
        <li><?php echo $arrMhs[0]; ?></li>
        <li><?php echo $arrMhs[1]; ?></li>
        <li><?php echo $arrMhs[2]; ?></li>
        <li><?php echo $arrMhs[3]; ?></li>
    </ol>

    <h3>Contoh 4</h3>
    <ol>
        <?php foreach ($arrMhs as $nama) {
            echo "<li>$nama</li>";
        } ?>
    </ol>

    <h3>Contoh Function Compact</h3>
    <ol>
        <li><?php echo $mhs1; ?></li>
        <li><?php echo $mhs2; ?></li>
        <li><?php echo $mhs3; ?></li>
        <li><?php echo $mhs4; ?></li>
    </ol>
</body>

</html>
