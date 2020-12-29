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
                $pro_cat  = $row['category_id'];
                $pro_brand  = $row['brand_id'];
                $pro_image = $row['picture'];
                $pro_price = $row['price'];
                $price = number_format($pro_price, 0);
                // echo "
                //         <div class='col-md-3 col-sm-6 col-xs-6 col-6'>
                //             <div class='card'>
                //                 <img class='card-img-top' src='productpic/$pro_image'>
                //                 <div class='card-body'>
                //                     <h6 class='card-title'>
                //                         $pro_name
                //                     </h6>
                //                     <a href='#' class='btn btn-outline-secondary'>$pro_price</a>
                //                     <a href='cart.php?id=$pro_id&action=add' class='btn btn-primary'>Add to Cart</a>
                //                 </div>
                //             </div>
                //         </div>
                // ";
                echo "<div class='single-job-items mb-30'>
                <div class='job-items'>
                    <div class='company-img'>
                        <img src='productpic/$pro_image' style='width: 180px' alt=''>
                    </div>
                    <div class='job-tittle job-tittle2'>
                        <a href='#'>
                            <h4>$pro_name</h4>
                        </a>
                        <ul>
                            <li>Rp$price,00</li>
                        </ul>
                    </div>
                </div>
                <div class='items-link items-link2 f-right'>
                    <a href='cart.php?id=$pro_id&action=add'>Add to Cart</a>
                </div>
            </div>";
            }
        }
    }

    // brand
    if(isset($_POST["brand"])){
        $brand_query = "SELECT * FROM brand";
        $run_query = mysqli_query($koneksi,$brand_query) or die(mysqli_error($koneksi));
        if(mysqli_num_rows($run_query) > 0){
            while($row = mysqli_fetch_array($run_query)){
                $bid = $row["brand_id"];
                $brand_name = $row["brand_name"];
                echo "
                        
                            <a href='#' class='selectbrand dropdown-item' bid='$bid'>$brand_name</a>
                        
                ";
            }
            echo "</div>";
        }
    }

    //category
    if(isset($_POST["category"])){
        $category_query = "SELECT * FROM category";
        $run_query = mysqli_query($koneksi,$category_query) or die(mysqli_error($con));
        if(mysqli_num_rows($run_query) > 0){
            while($row = mysqli_fetch_array($run_query)){
                $cid = $row["category_id"];
                $cat_name = $row["category_name"];
                echo "
                <a href='#' class='category dropdown-item' cid='$cid'>$cat_name</a>
                ";
            }
            echo "</div>";
        }
    }

    //filter by brand/category/search
    if(isset($_POST["get_seleted_Category"]) || isset($_POST["selectbrand"])  || isset($_POST["search"])){
    
        if(isset($_POST["get_seleted_Category"])){
            $id = $_POST["category_id"];
            $sql = "SELECT * from product WHERE category_id = '$id'";
    
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
                $pro_cat  = $row['category_id'];
                $pro_brand  = $row['brand_id'];
                $pro_image = $row['picture'];
                $pro_price = $row['price'];
                $price = number_format($pro_price, 0);
            // echo "
            //         <div class='col-md-3 col-sm-4 col-xs-6'>
            //             <div class='card'>
            //                 <img class='card-img-top' src='productpic/$pro_image'>
            //                 <div class='card-body'>
            //                     <h6 class='card-title'>
            //                         $pro_name
            //                     </h6>
            //                     <a href='#' class='btn btn-outline-secondary'>$pro_price</a>
            //                     <a href='cart.php?id=$pro_id&action=add' class='btn btn-primary'>Add to Cart</a>
            //                 </div>
            //             </div>
            //         </div>
            // ";
            echo "<div class='single-job-items mb-30'>
                <div class='job-items'>
                    <div class='company-img'>
                        <img src='productpic/$pro_image' style='width: 180px' alt=''>
                    </div>
                    <div class='job-tittle job-tittle2'>
                        <a href='#'>
                            <h4>$pro_name</h4>
                        </a>
                        <ul>
                            <li>Rp$price,00</li>
                        </ul>
                    </div>
                </div>
                <div class='items-link items-link2 f-right'>
                    <a href='cart.php?id=$pro_id&action=add'>Add to Cart</a>
                </div>
            </div>";
        }
    }
?>