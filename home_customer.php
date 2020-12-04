
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
    <?php include 'header_customer.php'?>
    

    
<!-- Welcome -->

<!--- Image Slider -->
<div id="slides" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#slides" data-slide-to="0" class="active"></li>
        <li data-target="#slides" data-slide-to="1"></li>
        <li data-target="#slides" data-slide-to="2"></li>
    </ul>
    
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/xmas.png">
            <div class="carousel-caption">
                <h3>XMAS Sale</h3>
                <button type="button" class="btn btn-primary btn-lg">Belanja Sekarang</button>
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

<!--- Cards -->
<div class="container-fluid padding">
    <div class="row padding">
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="img/gundam.png">
                <div class="card-body">
                    <h4 class="card-title">
                       Gundam Model
                    </h4>
                    <p class="card-text">Dapatkan model kit gundam favoritmu di sini</p>
                    <a href="#" class="btn btn-outline-secondary">Cek Sekarang</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="img/tools.png">
                <div class="card-body">
                    <h4 class="card-title">
                       Tools Merakit
                    </h4>
                    <p class="card-text">Dapatkan alat merakit di sini</p>
                    <a href="#" class="btn btn-outline-secondary">Cek Sekarang</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="img/model.jpg">
                <div class="card-body">
                    <h4 class="card-title">
                        Model Kit Lainnya
                    </h4>
                    <p class="card-text">Model kit pesawat, kapal, dan lainnya!</p>
                    <a href="#" class="btn btn-outline-secondary">Cek Sekarang</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'?>
</body>
</html>