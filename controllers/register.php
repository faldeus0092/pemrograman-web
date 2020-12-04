<?php
    include ("../connection.php");
    $email = $_POST['email'];
    $username = $_POST['username'];
    $nama = $_POST['nama'];
    // ambil data file
    $picture = $_FILES['berkas']['name'];
    $tmpname = $_FILES['berkas']['tmp_name']; 
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $dir='../profilepic/';
    
    if(move_uploaded_file($tmpname, $dir.$picture)){
        $q="INSERT INTO user (email,username,nama,password,picture,role) VALUES ('$email',
                                                        '$username',
                                                        '$nama',
                                                        '$password',
                                                        '$picture',
                                                        '1')";
    }
    
    //header("Location:header.html");

    // if ("INSERT INTO user (email,username,password) VALUES ('$email','$username','$password')"){
        
    //     header("Location:../login.php");
    //     return;
    // }
    // header("Location:../register.php");


    if (sizeof($q) <= 0){
        echo "Error";
        die;
    }else{
        $q = mysqli_query($koneksi,$q);
        header("Location:../index.php");
    } 

?>