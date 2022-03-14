<?php 
    $host_db = "localhost";
    $user_db = "root";
    $pass_db = "";
    $db_name = "modul5";
    $table_name = "tb_mahasiswa";
    $connection = mysqli_connect($host_db, $user_db, $pass_db, $db_name);

    if (isset($_GET['nim'])) {
        $nim = $_GET['nim'];

        $sql = "DELETE FROM $table_name WHERE nim='$nim'";
        $query = mysqli_query($connection, $sql);

        if ($query) {
            header("location:./view/backend.php");
        } else {
            die("Data gagal dihapus");
        }
    } else {
        die("Akses dilarang");
    }
