<?php
session_start();
if (!isset($_SESSION['session_email'])) {
    header("location:../view/login");
    exit();
}

$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$db_name = "modul5";
$table_name = "tb_mahasiswa";
$connection = mysqli_connect($host_db, $user_db, $pass_db, $db_name);

//query mendapatkan tabel tb_user
$table_name2 = "tb_user";
$email = mysqli_query($connection, "SELECT email FROM $table_name2 WHERE email='$_SESSION[session_email]'");
$data = mysqli_fetch_array($email);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Table</title>
</head>

<body>
    <div class="container pt-5">
        <h1 class="text-center mb-5">Tabel Mahasiswa</h1>
        <center class="mb-5">
            <a href="./tambahmaha.php" class="btn btn-lg btn-primary mb-4">TAMBAH MAHASISWA</a>
            <a href="./editpass.php?email=<?php echo $data['email']?>" class="btn btn-lg btn-dark mb-4">EDIT PASSWORD</a>
            <a href="./logout.php" class="btn btn-lg btn-danger mb-4">LOGOUT</a>
        </center>
        <table id="tabel-data">
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Prodi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $mahasiswa = mysqli_query($connection, "select * from tb_mahasiswa");
                while ($row = mysqli_fetch_array($mahasiswa)) {
                ?>
                    <tr>
                        <td><?php echo $row['nim'] ?></td>
                        <td><?php echo $row['nama'] ?></td>
                        <td><?php echo $row['prodi'] ?></td>
                        <td>
                            <a href="./editmaha.php?nim=<?php echo $row['nim'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                            <a href="../deletemaha.php?nim=<?php echo $row['nim'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>

            <script>
                $(document).ready(function() {
                    $('#tabel-data').DataTable();
                });
            </script>

        </table>
    </div>
</body>

</html>