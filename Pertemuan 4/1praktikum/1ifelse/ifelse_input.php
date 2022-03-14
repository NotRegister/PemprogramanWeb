<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="ifelse_output.php" method="post">

        <h2>if elseif</h2>
        <h3>Jika anda membeli <= 2 anda akan mendapatkan discount 10%</h3>
        <h3>Jika anda membeli >= 3 anda akan mendapatkan discount 20%</h3>
        <label for="">Nama </label><br>
        <input type="text" name="nama" placeholder="Nama"><br><br>
        <label for="">Jumlah GPU yang dibeli</label><br>
        <input type="number" name="jumlah" placeholder="berapa jumlah gpu yang anda ingin beli"><br>

        <h2>switch case</h2>
        <label for="">Pilih Gender anda</label><br>
        <input type="radio" name="gender" id="laki" value="laki"><label for="">Laki Laki</label><br>
        <input type="radio" name="gender" id="perempuan" value="perempuan"><label for="">Perempuan</label><br>
        
        <h2>for loop</h2>
        <label for="">Berapa item yang anda akan beli</label>
        <input type="number" name="item" placeholder="Berapa item yang anda akan beli"><br>

        
        <input type="submit" value="Submit" name="submit">
    </form>

</body>

</html>