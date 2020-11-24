<?php
    include ("../connection.php");

    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    
    $q="INSERT INTO user (email,username,password) VALUES ('$email',
                                                        '$username',
                                                        '$password')";
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