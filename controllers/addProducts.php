<?php
    include ("../connection.php");
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $price = $_POST['price'];
    //$brand = $_POST['brand'];
    $stock = $_POST['stock'];
    // ambil data file
    $picture = $_FILES['berkas']['name'];
    $tmpname = $_FILES['berkas']['tmp_name']; 
    $dir='../productpic/';
    
    if(move_uploaded_file($tmpname, $dir.$picture)){
        $q="INSERT INTO product (category_id,name,stock,picture,price) VALUES ('$kategori',
                                                        '$nama',
                                                        '$stock',
                                                        '$picture',
                                                        '$price')";
        // var_dump ($q);
        // die;
    }

    if (mysqli_query($koneksi,$q)){
        header("Location:../addProducts.php");
    }else{
        echo "Error";
        die;
    } 

?>