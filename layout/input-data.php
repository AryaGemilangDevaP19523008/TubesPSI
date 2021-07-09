<?php
require 'function.php';

if( isset($_POST["penjualan"]) ) {
  
  if( tambah($_POST) > 0 ) {
    echo "
      <script>
        alert('Berhasil');
        document.location.href = 'dashboard.php';
      </script>";
  } else {
    echo "
      <script>
        alert('Gagal');
        document.location.href = 'input-data.php';
      </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Input Data</title>
  <link href="css/bootstrap.css" rel="stylesheet"/>
  <link href="css/styles.css" rel="stylesheet"/>
</head>
<body>

  <div class="body-cream">
    <div class="header-dashboard">
      <div class="logo-text">DEALERKU</div>
      <div class="box-user">  
        <a href="login.php">Logout</a>
      </div>
    </div>

    <!--navbarrrrrrrrrrrrr-->
    <div class="body-dashboard">
      <div class="sidebar-dashboard">
        <div class="sidebar-menu">
          <a href="dashboard.php">Dashboard</a>
          <a href="#" class="active">Input Data</a>
          <a href="stok.html">Cek Stok</a>
        </div>

        <!--FOtoOooooo-->
        <div class="sidebar-image">
          <img src="img/vespa.svg"/>
        </div>
      </div>

      <!--contenttttttttttttt-->
      <div class="content-dashboard">
        <div class="card-cream mb-0">
          <div class="title text-center">PENJUALAN MOTOR</div>

          <form id=inputData method="post">
            <div class="card-content">
              <div class=subtitle>INPUT DATA</div>

              <div class="row mt-5">
                <div class="col-md-6">
                  <div class="form-group row mb-4">

                    <label class="col-sm-4 col-form-label">Hari:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control-plaintext" name="hari" id="hari" required>
                    </div>
                  </div>
                  <div class="form-group row mb-4">

                    <label class="col-sm-4 col-form-label">Tanggal:</label>
                    <div class="col-sm-8">
                      <input type="date" class="form-control-plaintext" name="tanggal" id="tanggal" required>
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label class="col-sm-4 col-form-label">Merk Motor:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control-plaintext" name="merk" id="merk" required>
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label class="col-sm-4 col-form-label">Type Motor:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control-plaintext" name="tipe" id="tipe" required>
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label class="col-sm-4 col-form-label">Seri Motor:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control-plaintext" name="seri" id="seri" required>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group row mb-4">
                    <label class="col-sm-4 col-form-label">Nama Pembeli:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control-plaintext" name="namaPem" id="namaPem" required>
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label class="col-sm-4 col-form-label">No Handphone:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control-plaintext" name="noHP" id="noHP">
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label class="col-sm-4 col-form-label">Alamat:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control-plaintext" name="alamat" id="alamat" required>
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label class="col-sm-4 col-form-label">Harga:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control-plaintext" name="harga" id="harga">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="text-center">
              <button class="button-cream" name="penjualan" value="submit">SUBMIT</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  
  <script
      crossorigin="anonymous"
      src="js/bootstrap.js"
    ></script>
</body>
</html>