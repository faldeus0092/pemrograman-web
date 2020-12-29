<!DOCTYPE html>
<html>
	<head>
        <title>Pesanan Selesai</title>
	</head>
    <body>   
        <?php include 'header.php' ?>    
        <div class="our-services section-pad-t30">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <h2>Pesanan yang Bagus, Sekarang Bayar</h2>
                            <p><?php echo $_SESSION['username'];?> selesaikan pembayaranmu dengan transfer sebesar <?= $s ?> ke Bank Mandiri 01293040281029 a.n. Yanto
                        </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'footer.php'?>
    </body>
</html> 