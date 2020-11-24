
<!DOCTYPE html>
    <html>
    <head>
        <title>Home Page</title>
        <?php
        session_start();
        if (empty($_SESSION['username'])) {
        # code...
        header("Location:index.php?error=invalid");
        }
        ?>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    <body>
        <?php include 'header.php'?>
        <h1>Selamat datang, <?php echo $_SESSION['username']; ?></h1>
        <h3>Anda berhasil Login</h3>
        </p><a href='controllers/logout.php'>logout</a>
        <?php include 'footer.php'?>
    </body>
</html>