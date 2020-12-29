<?php
    session_start();
    include ("connection.php");
    require 'item.php';
    if (!isset($_POST['nama']) || !isset($_SESSION['username'])){
        header("Location:index.php");
    }
    $nama=$_POST['nama'];
    $no_hp=$_POST['no_hp'];
    $alamat=$_POST['alamat'];
    // Save new orders
    
    $sql1 = 'INSERT INTO orders (id_user, nama, alamat, no_hp, status) VALUES ("'.$_SESSION['id_user'].'", 
                                                                                "'.$nama.'",
                                                                                "'.$alamat.'",
                                                                                "'.$no_hp.'",
                                                                                "0")';
    mysqli_query($koneksi, $sql1);
    $ordersid = mysqli_insert_id($koneksi); 

    // Save order details for new orders
    $cart = unserialize(serialize($_SESSION['cart']));
    for($i=0; $i<count($cart);$i++) {
        $sql2 = 'INSERT INTO `order-details` (id_product, id_order, price, qty) VALUES ('.$cart[$i]->id_product.', '.$ordersid.', '.$cart[$i]->price.', '.$cart[$i]->quantity.')';
        mysqli_query($koneksi, $sql2);
    }
    
    $cart = unserialize(serialize($_SESSION['cart']));
    $s = 0;
    $index = 0;
    //tampilkan total harga
    for($i=0; $i<count($cart); $i++){
        $s += $cart[$i]->price * $cart[$i]->quantity;
    }

    //header("Location:../ordercomplete.php");
    // Clear all product in cart
    unset($_SESSION['cart']);
?>
<!DOCTYPE html>
<html>
	<head>
        <title>Pesanan Selesai</title>
	</head>
    <body>  
        <?php include 'header.php'; ?>    
        <div class="our-services section-pad-t30">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <h2>Pesanan yang Bagus, Sekarang Bayar</h2>
                            <p><?php echo $_SESSION['username'];?> selesaikan pembayaranmu dengan transfer sebesar <a style="color:#fb246a;"><?php echo $s ?> ke Bank Mandiri 01293040281029 a.n. Yanto
                                <br>Pesanan otomatis diproses ketika sudah membayar. Lihat daftar pesananmu <a class="tes" href="orderlist.php">di sini</a>    
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'footer.php'?>
    </body>
</html> 
