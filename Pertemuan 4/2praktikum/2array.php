<?php 
    $jurusan = array(
        array("informasi", "informatika", "animasi"),
        array("kimia", "matematika", "biologi"),
        array("fisika", "kimia", "biofisika"),
        array("biologi", "matematika", "fisika")
    );

    echo "<pre>";
    print_r($jurusan);
    echo "</pre>";

    echo "<pre>";
    foreach ($jurusan as $jur) {
        echo "jurusan 1 : " . $jur[0] . "<br>";
        echo "jurusan 2 : " . $jur[1] . "<br>";
        echo "jurusan 3 : " . $jur[2] . "<br><br>";
    }
?>