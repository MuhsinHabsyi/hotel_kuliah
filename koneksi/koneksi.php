<?php 
    $host = "localhost";
    $username = "root";
    $db_name = "hotel_db";
    $password = "";

    $koneksi = mysqli_connect($host, $username, $password, $db_name) or die ("Koneksi mysqli gagal!");

?>