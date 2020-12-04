
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
	<link href="style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://m.w3newbie.com/you-tube.css">
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="img/logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pre-Order</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sale</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Check Order</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Confirm Payment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
            </ul> 
        </div>
    </div>
</nav>

<!-- Welcome -->
<div class="container-fluid">
    <div class="row jumbotron">
        <p>
			Welcome. please either 
				<a href="login.php">login</a>
				 or 
				 <a href="register.php">register</a> 
				 to continue
		</p>
    </div>
</div>

<!--- Image Slider -->
<div id="slides" class="carousel slide" data-ride="carousel">
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

<!--- Jumbotron -->
<div class="container-fluid">
    <div class="row jumbotron">
        <div class="col-xs-12 col-sm-12 col-md-9 col-xl-10">
            <a class="lead">MegaHobby.com makes it easy for everyone to shop online and find everything they need in one convenient place. We are busy enhancing and updating the site on a daily basis to keep it fresh and interesting for every visitor that stops by. You will find a wide variety of models and many different skill levels to accommodate all builders. Visit the site often to see the many different items we offer.</a>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3 col-xl-2">
            <a href="#"><button type="button" class="btn btn-outline-secondary btn-lg">ccs</button></a>
        </div>
    </div>
</div>

<!--- Welcome Section -->
<div class="container-fluid padding">
	<div class="row welcome text-center">
		<div class="col-12">
			<h1 class="display-4">GUNPLA</h1>
        </div>
        <hr>
		<div class="col-12">
			<a class="lead">
				Challenge the dream. GUNDAM will move. The world will move.
			</a>
		</div>
	</div>
</div>

<!--- Three Column Section -->
<div class="container-fluid padding">
    <div class="row text-center padding">
        <div class="col-xs-12 col-sm-6 col-md-4">
            <i class="fas fa-code"></i>
            <h3>HTML5</h3>
            <p>Built with the latest version of HTML5</p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <i class="fas fa-code"></i>
            <h3>BOOTSTRAP</h3>
            <p>Built with the latest version of Bootstrap, BS4</p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4">
            <i class="fab fa-code"></i>
            <h3>BOOTSTRAP</h3>
            <p>Built with the latest version of Bootstrap, BS4</p>
        </div>
    </div>
    <hr class="my-4">
</div>

<!--- Two Column Section -->
<div class="container-fluid padding">
    <div class="row padding">
        <div class="col-lg-6">
            <h2>Build Your Dream GUNPLA</h2>
            <p>MegaHobby.com also stocks a wide variety of paints, supplies, detailing sets, and books to satisfy every customer's needs.</p>
            <p> There are also many educational and historical items that are perfect for science and school projects. We have also expanded our product line to include puzzles, paint by number sets, science kits, and more</p>
            <br>
            <a href="#" class="btn btn-primary">Read More</a>
        </div>
        <div class="col-lg-6">
            <img src="img/desk.png" class="img-fluid">
        </div>
    </div>
</div>

<!--- Fixed background -->


<!--- Emoji Section -->

  
<!--- Meet the team -->
<div class="container-fluid padding">
    <div class="row welcome text-center">
        <div class="col-12">
            <h1 class="display-4">Browse Items</h1>
        </div>
    </div>
</div>

<!--- Cards -->
<div class="container-fluid padding">
    <div class="row padding">
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="img/team1.png">
                <div class="card-body">
                    <h4 class="card-title">
                        MG 1/100 Gundam Barbatos
                    </h4>
                    <p class="card-text">Bottom Text</p>
                    <a href="#" class="btn btn-outline-secondary">Rp 700.000</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="img/team2.png">
                <div class="card-body">
                    <h4 class="card-title">
                        MG 1/100 Gundam Dynames
                    </h4>
                    <p class="card-text">Bottom Text</p>
                    <a href="#" class="btn btn-outline-secondary">Rp 700.000</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="img/team3.png">
                <div class="card-body">
                    <h4 class="card-title">
                        MG 1/100 Gundam Astray Red Frame Kai
                    </h4>
                    <p class="card-text">Bottom Text</p>
                    <a href="#" class="btn btn-outline-secondary">Rp 700.000</a>
                </div>
            </div>
        </div>
    </div>
</div>

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


