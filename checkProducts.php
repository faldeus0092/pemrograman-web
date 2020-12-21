

<!DOCTYPE html>
<html>
	<head>
		<title>Check Products</title>
        <link rel="stylesheet" href="styles.css">
        <?php
        session_start();
        if (empty($_SESSION['username'])) {
        # code...
        header("Location:index.php?error=invalid");
        }?> 
    </head>
    <style>
        #products {
        border-collapse: collapse;
        width: 100%;
        margin: 1rem;
        }

        #products td, #products th {
        border: 1px solid #ddd;
        padding: 8px;
        }

        #products tr:nth-child(even){background-color: #f2f2f2;}

        #products tr:hover {background-color: #ddd;}

        #products th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #563d7c;
        color: white;
        }
    </style>
    <?php include 'header_admin.php'?>
    <body>
        <div class="container-fluid padding" align="center">
            <div class="row-padding">
                <div class="col-lg-4 col-md-6 col-sm-8 col-xs 12">
                    <table id="products">
                        <tr>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Stock</th>
                        </tr>
                        <?php 
                            include ("connection.php");
                            $products="SELECT name, type, stock, picture FROM product";
                            $result = $koneksi->query($products);
                            //echo "<table>";
                            if ($result->num_rows > 0) {
                            // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    echo "<tr><td>" . $row["name"] ."</td>
                                        <td>" . $row["type"] . "</td>
                                        <td>" . $row["stock"] ."</td></tr>";
                                }
                                //echo "</table>";
                            } else {
                                echo "0 results";
                            }
                        ?>
                    </table>
                    <a href="editProducts.php" class="btn btn-primary">Edit Products</a>
                </div>
            </div>
        </div>
    </body>
    <?php include 'footer.php'?>
</html> 

