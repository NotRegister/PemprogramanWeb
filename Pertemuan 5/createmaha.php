<?php  
    $host_db = "localhost";
    $user_db = "root";
    $pass_db = "";
    $db_name = "modul5";
    $table_name = "tb_mahasiswa";
    $connection = mysqli_connect($host_db, $user_db, $pass_db, $db_name);

    if (isset($_POST['submit'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $prodi = $_POST['prodi'];

        $sql = "INSERT INTO $table_name (nim, nama, prodi) VALUES ('$nim', '$nama', '$prodi')";
        $query = mysqli_query($connection, $sql);

        if ($query) {
            header("location:./view/backend.php");
        } else {
            header("location:./view/backend.php");
        }
    }

?>