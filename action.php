<?php 
    session_start();
    include ("connection.php");


    //get product
    if(isset($_POST["getproduct"])) {
        $limit = 9;
        if(isset($_POST["setpage"])) {
           $pageno = $_POST["pageno"];
           $start  = ($pageno * $limit) - $limit ;
        }else { $start = 0;}
    
        $product_query = "SELECT * FROM product  LIMIT $start,$limit";
        $run_query = mysqli_query($koneksi,$product_query);
    
        if(mysqli_num_rows($run_query) > 0) {
            while ($row = mysqli_fetch_array($run_query)) {
                $pro_id    = $row['id_product'];
                $pro_name  = $row['name'];
                $pro_type  = $row['type'];
                $pro_image = $row['picture'];
                $pro_price = $row['price'];
                echo "
                        <div class='col-md-3 col-sm-4 col-xs-6'>
                            <div class='card'>
                                <img class='card-img-top' src='productpic/$pro_image'>
                                <div class='card-body'>
                                    <h6 class='card-title'>
                                        $pro_name
                                    </h6>
                                    <a href='#' class='btn btn-outline-secondary'>$pro_price</a>
                                    <a href='cart.php?id=$pro_id&action=add' class='btn btn-primary'>Add to Cart</a>
                                </div>
                            </div>
                        </div>
                ";
            }
        }
    }

    // brand
    if(isset($_POST["brand"])){
        $brand_query = "SELECT * FROM brand";
        $run_query = mysqli_query($koneksi,$brand_query) or die(mysqli_error($koneksi));
        echo "
            <div class='nav nav-pills nav-stacked'>
                <li class='active'><a href='#'><h4>Brands</h4></a></li>
        ";
        if(mysqli_num_rows($run_query) > 0){
            while($row = mysqli_fetch_array($run_query)){
                $bid = $row["brand_id"];
                $brand_name = $row["brand_name"];
                echo "
                        <li>
                            <a href='#' class='selectbrand' bid='$bid'>$brand_name</a>
                        </li>
                ";
            }
            echo "</div>";
        }
    }
    //filter by brand/category/search
    if(isset($_POST["get_seleted_Category"]) || isset($_POST["selectbrand"])  || isset($_POST["search"])){
    
        if(isset($_POST["get_seleted_Category"])){
            $id = $_POST["cat_id"];
            $sql = "SELECT * from product WHERE product_cat = '$id'";
    
        }else if(isset($_POST["selectbrand"])){
            $id = $_POST["brand_id"];
            $sql = "SELECT * from product WHERE brand_id = '$id'";
        } else {
            $keyword = $_POST["keyword"];
            $sql = "SELECT * FROM product WHERE product_keywords LIKE '%$keyword%'";
        }
    
       
        $run_query = mysqli_query($koneksi,$sql);
    
        while ($row = mysqli_fetch_array($run_query)) {
            $pro_id    = $row['id_product'];
            $pro_name  = $row['name'];
            $pro_type  = $row['type'];
            $pro_image = $row['picture'];
            $pro_price = $row['price'];
            echo "
                    <div class='col-md-3 col-sm-4 col-xs-6'>
                        <div class='card'>
                            <img class='card-img-top' src='productpic/$pro_image'>
                            <div class='card-body'>
                                <h6 class='card-title'>
                                    $pro_name
                                </h6>
                                <a href='#' class='btn btn-outline-secondary'>$pro_price</a>
                                <a href='cart.php?id=$pro_id&action=add' class='btn btn-primary'>Add to Cart</a>
                            </div>
                        </div>
                    </div>
            ";
        }
    }
?>