<?php
    $server="localhost";
    $username="root";
    $password="";
    $db="pweb";

    $koneksi = new mysqli($server, $username, $password, $db);

    if ($koneksi->connect_error){
        echo "koneksi gagal";
    }
?>