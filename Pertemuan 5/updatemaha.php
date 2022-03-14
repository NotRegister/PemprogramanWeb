<?php 
    $host_db = "localhost";
    $user_db = "root";
    $pass_db = "";
    $db_name = "modul5";
    $table_name = "tb_mahasiswa";
    $connection = mysqli_connect($host_db, $user_db, $pass_db, $db_name);

    //! mendapatkan data dari database
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];

    $query = "UPDATE $table_name SET nama='$nama', prodi='$prodi' WHERE nim='$nim'";

    if ($connection->query($query) ) {
        header("location:./view/backend.php");
    } else {
        echo "Data gagal diupdate";
    }
?>