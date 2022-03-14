<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php
if (isset($_POST['Submit'])) {
    if (!empty($_POST['kartun'])) {
        $selected = $_POST['kartun'];
        echo "Kartun yang anda pilih adalah : <b>" . $selected . "</b>";
    }
}
?>

</body>

</html>