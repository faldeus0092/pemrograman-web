
<!DOCTYPE html>
<html>
	<head>
        <title>Login</title>
       
	</head>
    <body>
    <?php include 'header.php'?>
    <div class="container-fluid padding" align="center">
            <div class="col-md-4 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h1 style="text-align:center">Login</h1>
                        </div>
                        <form action="controllers/login.php" method="POST">
                            <div class="form-group">    
                                <label for="username">Username:</label><br>
                                <input type="text" class="form-control" id="username" name="username" width="100"><br>
                            </div>    
                            <div class="form-group"> 
                                <label for="password">Password:</label><br>
                                <input type="password" class="form-control" id="password" name="password" width="100"><br>
                            </div>
                                <input type="submit" class="btn btn-primary" value="Submit">
                        </form>
                        <p style="margin-top: 1rem;">
                            Tidak punya akun? <a href="register.php">daftar</a>
                        </p>
                        <?php
                            if(isset($_SESSION["error"])){
                                $error = $_SESSION["error"];
                                echo "<span>$error</span>";
                             }
                            ?>  
                    </div>
                </div>
            </div>
        </div>
    <?php include 'footer.php'?>
	</body>
</html> 
