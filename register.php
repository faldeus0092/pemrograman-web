

<!DOCTYPE html>
<html>
	<head>
        <title>Login</title>
       
	</head>
    <body>
    <?php include 'header.php'?>
<div class="apply-process-area apply-bg pt-150 pb-150" data-background="assets/img/gallery/how-applybg.png">
    <div class="container">    
        <div class="container-fluid padding" align="center">
            <div class="col-md-5 col-sm-6">
                <div class="card">
                    <div class="card-body">
                    <div class="card-title">
                            <h1 style="text-align:center">Register</h1>
                        </div>
                        <form action="controllers/register.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="email">Email:</label><br>
                                <input type="text" class="form-control" id="email" name="email" width="100"><br>
                            </div>
                            <div class="form-group">
                                <label for="email">Nama:</label><br>
                                <input type="text" class="form-control" id="nama" name="nama" width="100"><br>
                            </div>
                            <div class="form-group">
                                <label for="username">Username:</label><br>
                                <input type="text" class="form-control" id="username" name="username" width="100"><br>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label><br>
                                <input type="password" class="form-control" id="password" name="password" width="100"><br>
                            </div>
                            <div class="form-group">
                                <label for="berkas">Foto Profil:</label><br>
                                <input type="file" class="form-control" id="berkas" name="berkas" width="100" style="margin-bottom: 1rem;"><br>
                            </div>
                            <input type="submit" value="Register" class="btn btn-primary">
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <?php include 'footer.php'?>
	</body>
</html> 
