<?php 
 session_start();
 require 'connection.php';
 require 'item.php';
 include 'header.php';

// // Save new orders
// $sql1 = 'INSERT INTO orders (id_user, status) VALUES ("'.$_SESSION['id_user'].'","0")';
// mysqli_query($koneksi, $sql1);
// $ordersid = mysqli_insert_id($koneksi); 

// // Save order details for new orders
// $cart = unserialize(serialize($_SESSION['cart']));
// for($i=0; $i<count($cart);$i++) {
//     $sql2 = 'INSERT INTO `order-details` (id_product, id_order, price, qty) VALUES ('.$cart[$i]->id_product.', '.$ordersid.', '.$cart[$i]->price.', '.$cart[$i]->quantity.')';
//     mysqli_query($koneksi, $sql2);
// }

// // Clear all product in cart
// unset($_SESSION['cart']);
 ?>
 <head>
        <title>Checkout Pesanan</title>
       
	</head>
 <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
			<!-- Kiri -->
			<div class="col-lg-8 posts-list">
				<div class="single-post">
				<h4>Detail Pemesanan</h4>
				<form class="form-contact comment_form" action="order.php" id="commentForm" method="POST">
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<input class="form-control" name="nama" id="nama" type="text" placeholder="Name">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<input class="form-control" name="no_hp" id="no_hp" type="text" placeholder="No. HP / Telepon">
							</div>
						</div>
						<div class="col-12">
							<div class="form-group">
								<input class="form-control" name="alamat" id="alamat" type="text" placeholder="Alamat">
							</div>
						</div>
					</div>
					<div class="form-group">
						<button type="submit" class="button button-contactForm btn_1 boxed-btn">PESAN</button>
					</div>
				</form>
				</div>
			</div>
			<!-- Kanan -->
			<div class="col-lg-4">
            	<div class="blog_right_sidebar">
					<aside class="single_sidebar_widget popular_post_widget">
						<h3 class="widget_title">Pesananmu</h3>
						<?php 
                                $cart = unserialize(serialize($_SESSION['cart']));
                                $s = 0;
                                $index = 0;
                                //tampilkan produk dengan loop
                                for($i=0; $i<count($cart); $i++){
                                $s += $cart[$i]->price * $cart[$i]->quantity;
                        ?>
						<div class="media post_item">
							<?php 
                                $img=$cart[$i]->image;
                                echo "
                                <img src='productpic/$img' style='width: 80px' alt=''>
                                "
                            ?>
						   <div class="media-body">
							  <a href="single-blog.html">
								 <h3><?php echo $cart[$i]->name; ?></h3>
							  </a>
							  <p>Rp<?php
                                                        $subsum=$cart[$i]->price*$cart[$i]->quantity;
                                                        $price = number_format($subsum, 0); 
                                                        echo $price;
                                                    ?>,00</p>
						   </div>
						</div>
						<?php $index++;} ?>
						<hr>
						<?php $total = number_format($s, 0);?>
						<div class="col-md-6">
							<a style="font-weight: bold; ">Subtotal: </a>
						</div>
						<div class="col-md-6">
							<a style="font-weight: bold; color: red;">Rp<?php echo $total; ?>,00 </a>
						</div>
					 </aside>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include 'footer.php' ?>