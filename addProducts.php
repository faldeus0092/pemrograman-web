<!DOCTYPE html>
<html>
	<head>
		<title>Add Products</title>
		<link rel="stylesheet" href="styles.css">
    </head>
    <?php include 'header.php'?>
    <body>
        <div class="container-fluid padding" align="center">
            <div class="col-md-4 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h1 style="text-align:center">Add Products</h1>
                        </div>
                        <form action="controllers/addProducts.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="nama">Nama Produk</label><br>
                                <input type="text" class="form-control" id="nama" name="nama" width="100"><br>
                            </div>
                            <div class="form-group">
                                <label for="brand">Brand</label><br>
                                <select class="form-control" id="brand" name="brand">
                                    <option value="1">Bandai</option>
                                    <option value="2">Kotobukiya</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="kategori">Kategori</label><br>
                                <select class="form-control" id="kategori" name="kategori">
                                    <option value="1">Gundam Model</option>
                                    <option value="2">Star Wars</option>
                                    <option value="3">Military</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="formControlRange">Stok</label>
                                <input type="range" class="form-control-range" id="stock" name="stock" min="1" max="500" value="1">
                                <p>Value: <span id="demo"></span></p>
                            </div>
                            <div class="form-group">
                                <label for="berkas">Foto :</label><br>
                                <input type="file" class="form-control" id="berkas" name="berkas" width="100" style="margin-bottom: 1rem;"><br>
                            </div>
                            <script>
                                var slider = document.getElementById("stok");
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
	</body>
</html> 