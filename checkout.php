<?php 
session_start();
require 'connection.php';
require 'item.php';
include 'header.php';

// Save new orders
$sql1 = 'INSERT INTO orders (id_user, status) VALUES ("'.$_SESSION['id_user'].'","0")';
mysqli_query($koneksi, $sql1);
$ordersid = mysqli_insert_id($koneksi); 

// Save order details for new orders
$cart = unserialize(serialize($_SESSION['cart']));
for($i=0; $i<count($cart);$i++) {
    $sql2 = 'INSERT INTO `order-details` (id_product, id_order, price, qty) VALUES ('.$cart[$i]->id_product.', '.$ordersid.', '.$cart[$i]->price.', '.$cart[$i]->quantity.')';
    mysqli_query($koneksi, $sql2);
}

// Clear all product in cart
unset($_SESSION['cart']);
 ?>

<div class="container-fluid padding">
	<div class="row welcome text-center">
		<div class="col-12">
			<h1 class="display-4">Terima Kasih</h1>
        </div>
        <hr>
		<div class="col-12">
			<a class="lead">
				Terima kasih telah berbelanja di IndoHobby. Cek detail pesananmu 
			</a><a href="checkorder.php">di sini</a>
		</div>
	</div>
</div>
<?php include 'footer.php' ?>