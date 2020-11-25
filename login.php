
<!DOCTYPE html>
<html>
	<head>
        <title>Login</title>
       
	</head>
    <body>
    <?php include 'header.php'?>
        <div align="center">
        <div class="title">
            <h1 style="text-align:center">Please Login</h1>
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
            <form>
            <p>
                Tidak punya akun? <a href="register.php">daftar</a>
            </p>
            <?php
                if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<span>$error</span>";
                    }
            ?>  
        </div>
    <?php include 'footer.php'?>
	</body>
</html> 
