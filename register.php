<!DOCTYPE html>
<html>
	<head>
		<title>Register</title>
		<link rel="stylesheet" href="styles.css">
	</head>
    <body style="background-color:antiquewhite">
        <div align="center">
            <h1 style="text-align:center">Register</h1>
            <form action="controllers/register.php" method="POST">
                <label for="email">Email:</label><br>
                <input type="text" id="email" name="email" width="100"><br>
                <label for="username">Username:</label><br>
                <input type="text" id="username" name="username" width="100"><br>
                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password" width="100"><br>
                <input type="submit" value="Submit">
            </form>
        </div>
        <!--
            <script type="text/javascript">
        -->


	</body>
</html> 