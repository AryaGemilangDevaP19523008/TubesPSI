<?php
      require 'function.php';
?>

<?php
      $result = mysqli_query($conn, "SELECT SUM(harga) FROM penjualan");
      $row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link href="css/bootstrap.css" rel="stylesheet"/>
  <link href="css/styles.css" rel="stylesheet"/>
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/Chart.min.js"></script>
</head>
<body>

  <!--AKUNNNNNNNNNN-->
  <div class="body-cream">
    <div class="header-dashboard">
      <div class="logo-text">DEALERKU</div>
      <div class="box-user">
        <a href="login.php">Logout</a>
      </div>
    </div>

    <!--navbarrrrrrrrrrrrrrrrrr-->
    <div class="body-dashboard">
      <div class="sidebar-dashboard">
        <div class="sidebar-menu">
          <a href="#" class="active">Dashboard</a>
          <a href="input-data.php">Input Data</a>
          <a href="stok.html">Cek Stok</a>
        </div>

        <!--LOGOOOO-->
        <div class="sidebar-image">
          <img src="img/vespa.svg"/>
        </div>
      </div>
      
      <div class="content-dashboard">
        <div class="card-white">
          <div class="title text-left">DASHBOARD</div>
          <div class="row">
            <div class="col-md-5">
              <div class="card-cream">
                <div class="sub-title">TOTAL PENDAPATAN</div>
                <!--
                <div class="text-nominal">RP 300.000.000.000</div>
              -->
              <?php
              $i = 0;
              $sql = mysqli_query($conn, "SELECT * FROM penjualan");
              while ($data = mysqli_fetch_array($sql)) {
                $i++;
                $hargaTotal[$i] = $data ['harga'];
              }
              echo "Total Pendapatan : ".array_sum($hargaTotal);
              ?>
              </div>
            </div>

            <!--LAKUUUUUUUUU-->
            <div class="col-md-2"></div>
            <div class="col-md-5">
              <div class="card-cream">
                <div class="sub-title">PALING LAKU</div>
                <div class="list-recommend">
                  <!--
                  <a href="#">Yamaha Motor 12</a>
                  <a href="#">Suzuki Motor 177</a>
                  <a href="#">Honda Motor 126</a>
                  <a href="#">Vespa Motor 1892</a>
                -->
                <table style="text-align: center;">
                <?php 
                $kwsk = mysqli_query($conn, "SELECT merk FROM penjualan WHERE merk LIKE 'kawasaki' ");
                $pgo = mysqli_query($conn, "SELECT merk FROM penjualan WHERE merk LIKE 'piaggio' ");
                $hnd = mysqli_query($conn, "SELECT merk FROM penjualan WHERE merk LIKE 'honda' ");
                ?>
                  <tr >
                    <th>Merk</th>
                    <th>Total terjual</th>
                  </tr>
                  <tr>
                    <td>Kawasaki</td>
                    <td><?php echo mysqli_num_rows($kwsk) ?></td>
                  </tr>
                  <tr>
                    <td>Piaggio</td>
                    <td><?php echo mysqli_num_rows($pgo) ?></td>
                  </tr>
                  <tr> 
                    <td>Honda</td>
                    <td><?php echo mysqli_num_rows($hnd) ?></td>
                  </tr>
                </table>

                </div>
              </div>
            </div>

            <!--GRAFIKKKKKKKKKKK-->
            <div class="col-md-12">
              <div class="card-cream">
                <div class="sub-title">TOTAL PENJUALAN PER MERK</div>
<!--
                <div class="cart">
                  <div class="bars-wrap">
                    <div class="bars">
                      <div class="bars-active" style="height: 100px;"></div>
                    </div>
                    <div class="bars-label"> MINGGU 1</div>
                  </div>
                  <div class="bars-wrap">
                    <div class="bars">
                      <div class="bars-active" style="height: 150px;"></div>
                    </div>
                    <div class="bars-label"> MINGGU 2</div>
                  </div>
                  <div class="bars-wrap">
                    <div class="bars">
                      <div class="bars-active" style="height: 50px;"></div>
                    </div>
                    <div class="bars-label"> MINGGU 3</div>
                  </div>
                  <div class="bars-wrap">
                    <div class="bars">
                      <div class="bars-active" style="height: 200px;"></div>
                    </div>
                    <div class="bars-label"> MINGGU 4</div>
                  </div>
                </div>
              -->
              <div id="chart-container">
            <canvas id="graphCanvas"></canvas>
        </div>
 <script>
        $(document).ready(function () {
            barChart();

        });
        function barChart() {
            {
                $.post("datas.php",
                function (data)
                {
                    /**console.log(data);**/
                     var merk = [];
                    var totalPen = [];
                    
                    for (var i in data) {
                     
                        merk.push(data[i].merk);
                        totalPen.push(data[i].totalPen);
                    }
                    console.log(totalPen);
                    var chartdata = {
                        labels: merk,
                        datasets: [
                            {
                                label: 'TOTAL',
                                backgroundColor: '#49e2ff',
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: totalPen,
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(86, 249, 255, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(153, 102, 255, 0.2)',
                                    'rgba(255, 159, 64, 0.2)'
                                ],
                                borderColor: [
                                    'rgba(255,99,132,1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(57, 150, 153, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255, 1)',
                                    'rgba(255, 159, 64, 1)'
                                ],
                                borderWidth: 1
                            }
                        ]
                    };
                    var graphTarget = $("#graphCanvas");
                    var barGraph = new Chart(graphTarget, {
                        type: 'bar',
                        data: chartdata,    
            borderWidth: 1
                    });
                });
            }
        }
      </script>
              </div>
            </div>
          </div>
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