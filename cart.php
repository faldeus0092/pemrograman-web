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

<h2> Items in your cart: </h2> 
<form method="POST">
    <div class="container-fluid padding">
        <div class="row padding">
            <div class="col-md-8">
                <?php 
                    $cart = unserialize(serialize($_SESSION['cart']));
                    $s = 0;
                    $index = 0;
                    //tampilkan produk dengan loop
                    for($i=0; $i<count($cart); $i++){
                    $s += $cart[$i]->price * $cart[$i]->quantity;
                ?>	   
                <!-- loop here -->
                <div class="card">
                    <div class="col-4">
                        <?php 
                            $img=$cart[$i]->image;
                            echo "
                                <img class='card-img-top img-fluid' src='productpic/$img'>
                            "
                        ?>
                    </div>
                    <div class="card-body col-8">
                        <h4 class="card-title">
                            <?php echo $cart[$i]->name; ?>
                        </h4>
                        <a href="cart.php?index=<?php echo $index; ?>" onclick="return confirm('Are you sure?')" class="btn btn-primary">Delete</a> </td>
                        <a href="#" class="btn btn-outline-secondary" style="color:red"><?php echo $cart[$i]->price ?></a>
                        <input type="number" min="1" value="<?php echo $cart[$i]->quantity; ?>" name="quantity[]">
                    </div>
                </div>
                <?php 
                $index++;
            } ?>
                <!-- till here -->
            </div>
            <div class="col-md-4">
                <div class="card">
                    <a style="font-weight: bold;">Ringkasan Belanja</a>
                    <a>Total Harga</a>
                    <input id="saveimg" type="image" src="images/save.png" name="update" alt="Save Button">
                    <input type="hidden" name="update">
                    <a style="font-weight: bold; color: red;"> <?php echo $s; ?> </a>
                    <a href="index.php">Continue Shopping</a> | <a href="checkout.php">Checkout</a>
                </div>
            </div>
        </div>
    </div>
</form>
<br>

<?php 
if(isset($_GET["id"]) || isset($_GET["index"])){
    header('Location: cart.php');
} 
?>
</body>
 </html>