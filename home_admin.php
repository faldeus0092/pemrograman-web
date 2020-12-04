
<!DOCTYPE html>
<html>
<head>
        <title>Home Page</title>
        <?php
        session_start();
        if (empty($_SESSION['username'])) {
        # code...
        header("Location:index.php?error=invalid");
        }?>  
</head>
<body>
    <?php include 'header_admin.php'?>
    

    
<!-- Welcome -->
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
            <a href="#"><button type="button" class="btn btn-outline-secondary btn-lg">Belanja Sekarang</button></a>
        </div>
    </div>
</div>

<?php include 'footer.php'?>
</body>
</html>