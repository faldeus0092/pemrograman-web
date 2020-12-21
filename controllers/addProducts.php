<?php
    include ("../connection.php");
    $nama = $_POST['nama'];
    $jenis = $_POST['jenis'];
    $stock = $_POST['stock'];
    // ambil data file
    $picture = $_FILES['berkas']['name'];
    $tmpname = $_FILES['berkas']['tmp_name']; 
    $dir='../productpic/';
    
    if(move_uploaded_file($tmpname, $dir.$picture)){
        $q="INSERT INTO product (name,type,stock,picture) VALUES ('$nama',
                                                        '$jenis',
                                                        '$stock',
                                                        '$picture')";
    }

    if (sizeof($q) <= 0){
        echo "Error";
        die;
    }else{
        $q = mysqli_query($koneksi,$q);
        header("Location:../addProducts.php");
    } 

?>