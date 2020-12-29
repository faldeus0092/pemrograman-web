<?php
    session_start();
    include ("connection.php");
    if($_SESSION['role']!=1){
        header("Location:index.php");
    }
    $user=$_SESSION['id_user'];
    $q1="SELECT * FROM `orders` WHERE `id_user`=$user";
    $res1 = mysqli_query($koneksi,$q1);
    
    $q2="SELECT *, t2.name FROM `order-details` t1 
    LEFT JOIN product t2 ON t1.id_product=t2.id_product 
    JOIN orders t3 ON (t1.id_order=t3.id_order && t3.id_user=4)";
    $res2 = mysqli_query($koneksi,$q2);

    if(isset($_GET['id']) && isset($_GET['status'])){
        $status=$_GET['status'];
        $id=$_GET['id'];
        //menunggu persetujuan -> diproses
        if ($status==0){
            $q = "UPDATE orders SET `status` = 1  WHERE `id_order` = $id";
            mysqli_query($koneksi, $q);
        }
        //diproses -> dikirim
        if ($status==1){
            $q = "UPDATE orders SET `status` = 2  WHERE `id_order` = $id";
            mysqli_query($koneksi, $q);
        }
        //dikirim -> sampai tujuan
        if ($status==2){
            $q = "UPDATE orders SET `status` = 3  WHERE `id_order` = $id";
            mysqli_query($koneksi, $q);
        }
    }

    include ('header.php');
?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pesanan</title>
    
    <!-- Custom styles for this template -->
    <!-- <link href="css/sb-admin-2.min.css" rel="stylesheet"> -->

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>
<!-- Begin Page Content -->
<div class="container-fluid">


<!-- DataTales Example -->
<div class="container box_1170">
    <div class="section-top-border">
<h3 class="mb-30">Kelola Pesanan</h3>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No. HP</th>
                        <th>Pesanan</th>
                        <th>Qty</th>
                        <th>Total Harga</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($res1 as $a){ ?>
                    <tr>
                        <td><?= $a['nama'] ?></td>
                        <td><?= $a['alamat'] ?></td>
                        <td><?= $a['no_hp'] ?></td>
                        <td> 
                            <?php foreach($res2 as $b){ ?>
                                <?php if($a['id_order']==$b['id_order']){ ?>
                            <li><?= $b['name'] ?></li>
                            <?php }} ?>
                        </td>
                        <td>
                        <?php foreach($res2 as $b){ ?>
                            <?php if($a['id_order']==$b['id_order']){ ?>
                        <li><?= $b['qty'] ?></li>
                        <?php }} ?>
                        </td>
                        <td>
                        <?php $sum=0;foreach($res2 as $b){
                            if($a['id_order']==$b['id_order']){
                                $sum=$sum+($b['price']*$b['qty']);
                            }
                        }                         
                        ?>Rp<?= number_format($sum,2); ?>
                        </td>
                        <td><?= $a['date_updated'] ?></td>
                        <td>
                            <div class="col text-center">
                            <?php if($a['status']==0){ ?>
                            <a >Menunggu Persetujuan</a>
                            <?php } ?>
                            <?php if($a['status']==1){ ?>
                            <a >Pesanan Diproses</a>
                            <?php } ?>
                            <?php if($a['status']==2){ ?>
                            <a >Pesanan Dikirim</a>
                            <?php } ?>
                            <?php if($a['status']==3){ ?>
                            <a >Sampai Tujuan</a>
                            <?php } ?>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                    <?php } ?>
                                </table>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                            </div>
<?php include ('footer.php'); ?>
<!-- /.container-fluid -->
