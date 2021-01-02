<!DOCTYPE html>
<html>
	<head>
        <title>Tambah Produk</title>
       
	</head>
    <body>
    <?php session_start(); include 'header-admin.php';
    if($_SESSION['role']!=2){
        Location('index.php');
    }?>
<div class="apply-process-area apply-bg pt-150 pb-150" data-background="assets/img/gallery/how-applybg.png">
    <div class="container">    
        <div class="container-fluid padding" align="center">
            <div class="col-md-5 col-sm-6">
                <div class="card">
                    <div class="card-body">
                    <div class="card-title">
                            <h1 style="text-align:center">Tambah Produk</h1>
                        </div>
                        <form action="controllers/addProducts.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="nama">Nama Produk</label><br>
                                <input type="text" class="form-control" id="nama" name="nama" width="80"><br>
                            </div>
                            <div class="form-group">
                                <label for="nama">Harga</label><br>
                                <input type="text" class="form-control" id="price" name="price" width="80"><br>
                            </div>
                            <div class="form-group">
                                <label for="kategori">Kategori</label><br>
                                <select class="form-control" id="kategori" name="kategori">
                                    <option value="1">Gundam Model</option>
                                    <option value="2">Star Wars</option>
                                    <option value="3">Military</option>
                                    <option value="4">Tools</option>
                                    <option value="5">Paint</option>
                                </select>
                            </div>
                            <!-- <div class="slidecontainer">
                                <input type="range" min="1" max="50" value="25" class="slider" id="stock" name="stock">
                                <p>Value: <span id="demo"></span></p>
                            </div> -->
                            <div class="form-group">
                                <label for="formControlRange">Stok</label>
                                <input type="range" class="form-control-range" id="stock" name="stock" min="1" max="50" value="1">
                                <p>Jumlah: <span id="demo"></span></p>
                            </div>
                            <div class="form-group">
                                <label for="berkas">Gambar</label><br>
                                <input type="file" class="form-control" id="berkas" name="berkas" width="100" style="margin-bottom: 1rem;"><br>
                            </div>
                            <script>
                                var slider = document.getElementById("stock");
                                var output = document.getElementById("demo");
                                output.innerHTML = slider.value;
                                
                                slider.oninput = function() {
                                  output.innerHTML = this.value;
                                }
                            </script>
                            <input type="submit" value="Add Product" class="btn btn-primary">
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