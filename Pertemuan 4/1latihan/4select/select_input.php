<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Pilih kartun favorit</h3>
    <form action="select_output.php" method="post">
        <select name="kartun" >
            <option value=""selected disabled>=== Pilih Kartun ===</option>
            <option value="Sponge Bob">Sponge Bob</option>
            <option value="Sinchan">Sinchan</option>
            <option value="Conan">Conan</option>
            <option value="Doraemon">Doraemon</option>
        </select>
        <input type="submit" name="Submit" value="Input">
    </form>

</body>

</html>