<?php

    $nama=$_FILES['berkas']['name'];
    $type=$_FILES['berkas']['type'];
    $tmpName=$_FILES['berkas']['tmp_name'];
    $dir="tesUpload/";
    if(move_uploaded_file($tmpName, $dir.$nama)){
        echo"berhasil";
    }else echo "gagal";

?>