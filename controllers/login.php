<?php
    session_start();
    include ("../connection.php");

    $username = $_POST["username"];
    $password = $_POST['password'];
    
    // $q="SELECT * FROM user 
    //     WHERE username='$username'
    //     && password='$password'";
        $q="SELECT * FROM user 
        WHERE username='$username'";

    $result = $koneksi->query($q);
    if ($result->num_rows>0){
        
        while($row=$result->fetch_assoc()){
            if (password_verify ($password , $row['password'] )){
                $_SESSION['username']=$username;
                $_SESSION['id_user']=$row['id_user'];
                if ($row['role']=='1'){
                    header("Location:../index.php");
                }
                else  header("Location:../home_admin.php");
            }
        }
    }else{
        $_SESSION["error"] = $error;
        header("Location:../login.php");
    } 
?>
