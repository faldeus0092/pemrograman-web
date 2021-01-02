<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<?php
session_start();
if (!isset($_SESSION['username'])){
    header("Location:index.php");
}
include 'header.php';
require 'connection.php';
require 'item.php';

if(isset($_GET['id']) && !isset($_POST['update'])){
    $sql = "SELECT * FROM product WHERE id_product=".$_GET['id'];
    $result = mysqli_query($koneksi, $sql);
    $product = mysqli_fetch_object($result);

    //menggunakan class item untuk menyimpan produk
    $item = new Item();
	$item->id_product = $product->id_product;
	$item->name = $product->name;
	$item->price = $product->price;
    $iteminstock = $product->stock;
    $item->quantity = 1;
    $item->image = $product->picture;

    //mengecek produk apa saja di cart
    //awal index -1
    if (!isset($_SESSION['cart'])){
        $_SESSION['cart'][] = $item;
    }else{
        $index=-1;
        // set $cart as an array, unserialize() converts a string into array
        $cart = unserialize(serialize($_SESSION['cart']));
        for($i=0; $i<count($cart);$i++)
            if ($cart[$i]->id_product == $_GET['id']){
                $index = $i;
                break;
            }
    
        if($index == -1) 
                $_SESSION['cart'][] = $item; // $_SESSION['cart']: set $cart as session variable
            else {
                if (($cart[$index]->quantity) < $iteminstock)
                    $cart[$index]->quantity ++;
                    $_SESSION['cart'] = $cart;
            }
    }
        
}

// Delete product in cart
if(isset($_GET['index']) && !isset($_POST['update'])) {
	$cart = unserialize(serialize($_SESSION['cart']));
	unset($cart[$_GET['index']]);
	$cart = array_values($cart);
	$_SESSION['cart'] = $cart;
}
//update qty
if(isset($_POST['update'])) {
    $arrQuantity = $_POST['quantity'];
    $cart = unserialize(serialize($_SESSION['cart']));
    for($i=0; $i<count($cart);$i++) {
       $cart[$i]->quantity = $arrQuantity[$i];
    }
    $_SESSION['cart'] = $cart;
  }

?>
<head>
        <title>Keranjang</title>
       
	</head>
    <!-- Konten -->
<div class="job-listing-area pt-120 pb-120">
    <form method="POST">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-4">
                    <div class="row">
                        <div class="col-12">
                                <div class="small-section-tittle2 mb-45">
                                <div class="ion"> <svg 
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="20px" height="12px">
                                <path fill-rule="evenodd"  fill="rgb(27, 207, 107)"
                                    d="M7.778,12.000 L12.222,12.000 L12.222,10.000 L7.778,10.000 L7.778,12.000 ZM-0.000,-0.000 L-0.000,2.000 L20.000,2.000 L20.000,-0.000 L-0.000,-0.000 ZM3.333,7.000 L16.667,7.000 L16.667,5.000 L3.333,5.000 L3.333,7.000 Z"/>
                                </svg>
                                </div>
                                <h4>Keranjang</h4>
                            </div>
                        </div>
                    </div>
                    <!-- Job Category Listing start -->
                    <div class="job-category-listing mb-50">
                        <!-- single three -->
                        <div class="single-listing">
                            <!-- select-brands start -->
                            <div class="select-Categories pb-50">
                                <div class="small-section-tittle2">
                                    <h4>Total Harga</h4>
                                </div>
                                <?php 
                                            if (isset($_SESSION['cart'])){
                                                $cart = unserialize(serialize($_SESSION['cart']));
                                                $s = 0;
                                                $index = 0;
                                                //tampilkan produk dengan loop
                                                for($i=0; $i<count($cart); $i++){
                                                $s += $cart[$i]->price * $cart[$i]->quantity;}
                                                $total = number_format($s, 0);
                                            }
                                ?>
                                <?php if(isset($_SESSION['cart'])){ ?>
                                    <a style="font-weight: bold; color: red;">RP<?php echo $total ?></a>
                                 <?php 
                                }else { ?>
                                    <a style="font-weight: bold; color: red;">Keranjang belanja anda masih kosong</a>
                                <?php } ?>
                            </div>
                            <!-- select-brands End -->
                            <!-- select-Categories start -->
                            <div class="select-Categories pb-50">
                                <div class="button-group-area mt-10">
                                    <a href="index.php" class="genric-btn primary">Belanja Lagi</a>
                                </div>
                                <div class="button-group-area mt-10">
                                    <a href="checkout.php" class="genric-btn danger">Checkout</a>
                                </div>
                                <div class="button-group-area mt-10"><input id="saveimg" class="genric-btn info" type="submit" value="Update Keranjang">
                                    <input type="hidden" name="update"></div>
                            </div>
                            <!-- select-Categories End -->
                            
                            
                        </div>
                    </div>
                    <!-- Job Category Listing End -->
                </div>
                    <!-- Right content -->
                    <div class="col-xl-9 col-lg-9 col-md-8">
                        <!-- Featured_job_start -->
                        <section class="featured-job-area">
                            <div class="container">
                                <!-- Count of Job list Start -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="count-job mb-35">
                                            <!-- Select job items start -->
                                            <div class="select-job-items">
                                                <span>Sort by</span>
                                                <select name="select">
                                                    <option value="">None</option>
                                                    <option value="">job list</option>
                                                    <option value="">job list</option>
                                                    <option value="">job list</option>
                                                </select>
                                            </div>
                                            <!--  Select job items End-->
                                        </div>
                                    </div>
                                </div>
                                <!-- Count of Job list End -->
                                <!-- ajax -->
                                <!-- loop cart -->
                                <?php 
                                            if (isset($_SESSION['cart'])){
                                                $cart = unserialize(serialize($_SESSION['cart']));
                                                $s = 0;
                                                $index = 0;
                                                //tampilkan produk dengan loop
                                                for($i=0; $i<count($cart); $i++){
                                                $s += $cart[$i]->price * $cart[$i]->quantity;
                                            
                                ?>
                                <div class="single-job-items mb-30">
                                    <div class="job-items">
                                        <div class="company-img">
                                            <a href="#">
                                            <?php 
                                                $img=$cart[$i]->image;
                                                echo "
                                                <img src='productpic/$img' style='width: 180px' alt=''>
                                                "
                                            ?>
                                            </a>
                                        </div>
                                        <div class="job-tittle job-tittle2">
                                            <a href="#">
                                                <h4><?php echo $cart[$i]->name; ?></h4>
                                            </a>
                                            <ul>
                                                <li>
                                                    Rp<?php
                                                        $subsum=$cart[$i]->price*$cart[$i]->quantity;
                                                        $price = number_format($subsum, 0); 
                                                        echo $price;
                                                    ?>,00
                                                </li>
                                            </ul>
                                            <ul>
                                                <input type="number" min="1" value="<?php echo $cart[$i]->quantity; ?>" name="quantity[]">
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="items-link items-link2 f-right">
                                         <a href="cart.php?index=<?php echo $index; ?>" onclick="return confirm('Are you sure?')" >Delete</a>
                                        
                                    </div>
                                </div>
                                <?php $index++;}} ?>
                                    <!-- till here -->
                                </div>
                                <!-- ajax done -->
                            </div>
                        </section>
                        <!-- Featured_job_end -->
                    </div>
            </div>
        </div>
    </div>
                            </form>
</div>
<?php include 'footer.php'; ?>