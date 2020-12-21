
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Homepage</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script src="main.js"></script>
    <link href="style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://m.w3newbie.com/you-tube.css">
</head>
<body>
<?php  session_start(); ?>

<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="img/logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="cart.php">Cart</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Check Order</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Confirm Payment</a>
                </li>
                <?php if(isset($_SESSION['username'])){
                    
                echo '<li class="nav-item">
                <a class="nav-link" href="controllers/logout.php">'; echo $_SESSION["username"]; echo '</a>
            </li>';
                } else{
                    echo '<li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>';
                } 
                ?> 
            </ul> 
        </div>
    </div>
</nav>

<!--- Image Slider -->
<div id="slides" class="carousel slide col-12" data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#slides" data-slide-to="0" class="active"></li>
        <li data-target="#slides" data-slide-to="1"></li>
        <li data-target="#slides" data-slide-to="2"></li>
    </ul>
    
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/background.png">
            <div class="carousel-caption">
                <h1 class="display-2">Bootstrap</h1>
                <h3>Complete Website Layout</h3>
                <button type="button" class="btn btn-outline-light btn-lg">VIEW DEMO</button>
                <button type="button" class="btn btn-primary btn-lg">Get Started</button>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/background2.png">
        </div>
        <div class="carousel-item">
            <img src="img/background3.png">
        </div>
    </div>
</div>

<!--- Meet the team -->
<div class="container-fluid padding">
    <div class="row welcome text-center">
        <div class="col-12">
            <h3 class="display-4">Browse Items</h3>
        </div>
    </div>
</div>

<!-- Konten -->
<div class="container-fluid">
    <div class="row">

        <div class="col-md-1"></div>

        <!-- Sidebar -->
        <!-- <div class="col-md-2">
            <div id="get_category"></div>
            <div id="get_brand"></div>
        </div> -->
        <div class="col-md-2">
            <!-- category -->
            <div id="get_category"></div>   
            <!-- category ends here -->
            <!-- brand -->
            <div id="get_brand"></div>
            <!-- brand ends here   -->
        </div>
        <!--Produk-->
        <div class="col-md-8">
            <div class="col-md-12" id="product_img">
            </div>
            <div class="container-fluid padding">
                <div class="row" id="get_product"></div>
            </div>
        </div>
        
        <div class="col-md-1"></div>

    </div>
</div>

<!--- Fixed background -->

<!--- Emoji Section -->

<!--- Two Column Section -->

<!--- Connect -->
<div class="container-fluid padding">
    <div class="row text-center padding">
        <div class="col-12">
            <h2>Connect</h2>
        </div>
        <div class="col-12 social padding">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
    </div>
</div>

<!--- Footer -->
<footer>
    <div class="container-fluid padding">
        <div class="row text-center">
            <div class="col-md-4">
                <img src="img/w3newbie.png">
                <hr class="light">
                <p>555-555-555</p>
                <p>sg.epk-x29@ppgn.jp</p>
                <p>Akihabara 209</p>
                <p>Akihabara, Tokyo</p>
            </div>
            <div class="col-md-4">
                <hr class="light">
                <h2>Our Hours</h2>
                <p>Monday: 9am-10pm</p>
                <p>Monday: 9am-10pm</p>
                <p>Sunday: Closed</p>
            </div>
            <div class="col-md-4">
                <hr class="light">
                <h2>Our Stores</h2>
                <p>Alamat</p>
                <p>Alamat</p>
                <p>Alamat</p>
            </div>
            <div class="col-12">
                <hr class="light-100">
                <b5>&copy; w3newbie.com</b5>
            </div>
        </div>
    </div>
</footer>



</body>
</html>


<!-- View in Browser: Drew's #1 Trending YouTube Tutorial -->
<!-- <div class="youtube-tutorial">
	<a href="http://w3n.link/bundle-bonus-playlist" target="_blank" style="cursor: pointer!important;">
    <img src="https://w3newbie.com/wp-content/uploads/12-site-bundle-banner.png" style="max-width: 100%; position: absolute; bottom: 0;">
  </a>
</div> -->
<!-- End View in Browser: Drew's #1 Trending YouTube Tutorial -->


