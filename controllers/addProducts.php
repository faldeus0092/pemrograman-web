<?php
    include ("../connection.php");
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $brand = $_POST['brand'];
    $stock = $_POST['stock'];
    // ambil data file
    $picture = $_FILES['berkas']['name'];
    $tmpname = $_FILES['berkas']['tmp_name']; 
    $dir='../productpic/';
    
    if(move_uploaded_file($tmpname, $dir.$picture)){
        $q="INSERT INTO product (name,category_id,stock,picture,brand_id) VALUES ('$nama',
                                                        '$kategori',
                                                        '$stock',
                                                        '$picture',
                                                        '$brand')";
        // var_dump ($q);
        // die;
    }

    if (sizeof($q) <= 0){
        echo "Error";
        die;
    }else{
        $q = mysqli_query($koneksi,$q);
        header("Location:../addProducts.php");
    } 

?>