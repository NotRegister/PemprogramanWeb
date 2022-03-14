<?php 
    $host_db = "localhost";
    $user_db = "root";
    $pass_db = "";
    $db_name = "modul5";
    $table_name = "tb_user";
    $connection = mysqli_connect($host_db, $user_db, $pass_db, $db_name);
    
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    // edit password from email
    if (isset($_POST['edit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password = md5($password);
        
        
        $sql = "UPDATE $table_name SET password ='$password' WHERE email='$email'";
        $query = mysqli_query($connection, $sql);

        
        if ($query) {
            header("location:./view/login.php");
        } else {
            echo "Data gagal diupdate";
        }
    }
    

?>