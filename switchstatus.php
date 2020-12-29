<?php
    session_start();
    if($_SESSION['role']!=2){
        header("Location:index.php");
    }
    include 'header.php';
    require 'connection.php';

    if(isset($_GET['id']) && isset($_GET['status'])){
        $status=$_GET['status'];
        $id=$_GET['id'];
        //menunggu persetujuan -> diproses
        if ($status==0){
            $q = "UPDATE orders SET `status` = 1  WHERE `id_order` = $id_order";
            mysqli_query($koneksi, $q);
        }
        //diproses -> dikirim
        if ($status==1){
            $q = "UPDATE orders SET `status` = 2  WHERE `id_order` = $id_order";
            mysqli_query($koneksi, $q);
        }
        //dikirim -> sampai tujuan
        if ($status==2){
            $q = "UPDATE orders SET `status` = 3  WHERE `id_order` = $id_order";
            mysqli_query($koneksi, $q);
        }
    }



?>