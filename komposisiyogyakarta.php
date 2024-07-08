<?php

@include 'koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Jogreen- Komposisi Sampah</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/jogreen.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> assets\css\style.css
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

 
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/jogreen.png" alt="">
        <span class="d-none d-lg-block">Jogreen</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

 

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Data Statisitk</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="timbulansampah.php">
              <i class="bi bi-circle"></i><span>Timbulan Sampah</span>
            </a>
          </li>

          <li>
            <a href="komposisisampah.php">
              <i class="bi bi-circle"></i><span>Komposisi Sampah Keeluruhan</span>
            </a>
          </li>

          <li>
            <a href="komposisibantul.php">
              <i class="bi bi-circle"></i><span>Komposisi Sampah Bantul</span>
            </a>
          </li>

          <li>
            <a href="komposisisleman.php">
              <i class="bi bi-circle"></i><span>Komposisi Sampah Sleman</span>
            </a>
          </li>

          <li>
            <a href="komposisigunkid.php">
              <i class="bi bi-circle"></i><span>Komposisi Sampah Gunungkidul</span>
            </a>
          </li>

          <li>
            <a href="komposisiyogyakarta.php">
              <i class="bi bi-circle"></i><span>Komposisi Sampah Yogyakarta</span>
            </a>
          </li>

          <li>
            <a href="komposisikulon.php">
              <i class="bi bi-circle"></i><span>Komposisi Sampah Kulonprogo</span>
            </a>
          </li>

          <li>
            <a href="sumbersampah.php">
              <i class="bi bi-circle"></i><span>Sumber Sampah</span>
            </a>
          </li>

        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Laporan Sampah</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="pelaporan.php">
              <i class="bi bi-circle"></i><span>Form Pelaporan</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="artikel.php">
          <i class="bi bi-grid"></i>
          <span>Artikel</span>
        </a>
      </li><!-- End Dashboard Nav -->


      


      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      

      <li class="nav-item">
        <a class="nav-link collapsed" href="login.php">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Komposisi Sampah Yogyakarta</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Data Statistik</li>
          <li class="breadcrumb-item active">Komposisi Sampah Bantul</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">

      <!-- Grafik bar-chart timbulan sampah -->
      
      <div class="row">
        <div class="col-12">
           <div class="card">
              <div class="card-body">
                  <h5 class="card-title">Komposisi Sampah Yogyakarta</h5>

                    <!-- Filters -->
                    <div>
                        <label for="kabupatenFilter">Kabupaten:</label>
                        <select id="kabupatenFilter">
                            <option value="all">Kab Yogyakarta</option>
                            <!-- Populate this with options dynamically or manually -->
                            
                        </select>

                        <label for="tahunFilter">Tahun:</label>
                        <select id="tahunFilter">
                            <option value="all">All</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <!-- Populate this with options dynamically or manually -->
                        </select>
                    </div>

                  <!-- pie Chart -->
                  <div id="pieChart"></div>

                    <script>
                      document.addEventListener("DOMContentLoaded", () => {
                        let currentChart = null;

                            // Function to fetch and render initial pie chart from fetch_data.php
                            const renderInitialChart = () => {
                                const tahun = document.getElementById('tahunFilter').value;

                                let url = 'fetch_data_komp_yogya.php';
                                if (tahun !== 'all') {
                                    url += `?tahun=${tahun}`;
                                }

                                
                                fetch(url)
                                    .then(response => response.json())
                                    .then(data => {
                                      const totals = data[0];

                                      const seriesData = [
                                          parseFloat(totals.total_sisa_makanan),
                                          parseFloat(totals.total_kayu_ranting),
                                          parseFloat(totals.total_kertas_karton),
                                          parseFloat(totals.total_plastik),
                                          parseFloat(totals.total_logam),
                                          parseFloat(totals.total_kain),
                                          parseFloat(totals.total_karet_kulit),
                                          parseFloat(totals.total_kaca),
                                          parseFloat(totals.total_lainnya)
                                      ];
                                        

                                        const categories = [
                                            'Sisa Makanan',
                                            'Kayu Ranting',
                                            'Kertas Karton',
                                            'Plastik',
                                            'Logam',
                                            'Kain',
                                            'Karet Kulit',
                                            'Kaca',
                                            'Lainnya'
                                        ];

                                        


                                        // Remove any existing chart
                                        if (currentChart) {
                                            currentChart.destroy();
                                        }

                                        currentChart = new ApexCharts(document.querySelector("#pieChart"), {
                                            series: seriesData ,
                                            chart: {
                                                height: 350 ,
                                                type: 'pie', 
                                                toolbar: {
                                                  show: true
                                                }
                                            },
                                            labels: categories,
                                        });
                                        currentChart.render(); 
                                     });
                            };
                            // Event listener for tahun filter dropdown
                             document.getElementById('tahunFilter').addEventListener('change', renderInitialChart);

                            // Render initial chart when page loads
                            renderInitialChart();
                      });

                    </script>
              </div>
           </div>
        </div>

       
      </div>

      

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
                <h5 class="card-title">Tanya Mengenai Grafik</h5>
                <form method="post">
                  <label for="question" class="col-sm-2 col-form-label" >Pertanyaan:</label>
                  <input type="text" id="question" name="question" class="form-control" required>
                  <br><br>
                  <input type="submit" class="btn btn-primary" value="Submit">
                </form> 
                <?php
                  require __DIR__ . '/vendor/autoload.php';

                  use LucianoTonet\GroqPHP\Groq;
                  use Dotenv\Dotenv;

                  $dotenv = Dotenv::createUnsafeImmutable(__DIR__);
                  $dotenv->load();

                  if ($_SERVER["REQUEST_METHOD"] == "POST") {
                      // Ambil nilai input dari form
                      $user_question = $_POST['question'];

                      // Koneksi ke database
                      $servername = "localhost";
                      $username = "root";
                      $password = "";
                      $dbname = "psi_db";

                      // Membuat koneksi
                      $conn = new mysqli($servername, $username, $password, $dbname);

                      // Memeriksa koneksi
                      if ($conn->connect_error) {
                          die("Koneksi gagal: " . $conn->connect_error);
                      }

                      // Query SQL untuk mengambil data timbulan_sampah_tahunan dan kabupaten
                      $sql = "SELECT * FROM komposisi_jenis_sampah_yogyakarta";

                      $result = $conn->query($sql);

                      $data = array();
                      if ($result->num_rows > 0) {
                          // Mengumpulkan hasil query ke dalam array asosiatif
                          while($row = $result->fetch_assoc()) {
                              $data[] = $row;
                          }
                      }

                      // Menutup koneksi ke database
                      $conn->close();

                      // Proses data lebih lanjut, misalnya untuk digunakan dalam GroqPHP
                      if (!empty($data)) {
                          $system_content = "Anda adalah AI yang hanya menjawab pertanyaa seputar sampah , permasalahannya dan solusinya ";
                          foreach ($data as $item) {
                            $system_content .=  "Kabupaten: " . $item['kabupaten'] . 
                            ", Sisa Makanan: " . $item['sisa_makanan'] . 
                            ", Kayu Ranting: " . $item['kayu_ranting'] . 
                            ", Kertas Karton: " . $item['kertas_karton'] . 
                            ", Plastik: " . $item['plastik'] . 
                            ", Logam: " . $item['logam'] . 
                            ", Kain: " . $item['kain'] . 
                            ", Karet Kulit: " . $item['karet_kulit'] . 
                            ", Kaca: " . $item['kaca'] . 
                            ", Lainnya: " . $item['lainnya'] . 
                            ", Tahun: " . $item['tahun'] . 
                            "; ";
                          }

                          $groq = new Groq(getenv('GROQ_API_KEY'));

                          $chatCompletion = $groq->chat()->completions()->create([
                              'model'    => 'llama3-8b-8192',
                              'messages' => [
                                  [
                                      'role'    => 'system',
                                      'content' => $system_content
                                  ],
                                  [
                                      'role'    => 'user',
                                      'content' => $user_question
                                  ]
                              ]
                          ]);

                          $output = $chatCompletion['choices'][0]['message']['content'];
                          
                          // Tampilkan output di halaman web
                          echo "<br></br>";
                          echo "<h4 >Output dari AI</h4>";
                          echo "<p>$output</p>";
                      } else {
                          echo "<h2>Output dari LLM</h2>";
                          echo "<p>Data tidak ditemukan.</p>";
                      }
                    }
                ?>  
            </div>
          </div>
        </div>
      </div>  

       <!-- Tabel -->               
      <div class="row">
          <div class="col-lg-12">
              <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Tabel Komposisi Sampah</h5>
                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                    <div class="datatable-dropdown">
                        <?php
                          // Replace with your database connection details
                          $servername = "localhost";
                          $username = "root";
                          $password = "";
                          $dbname = "psi_db";

                          // Create connection
                          $conn = new mysqli($servername, $username, $password, $dbname);

                          // Check connection
                          if ($conn->connect_error) {
                              die("Connection failed: " . $conn->connect_error);
                          }

                          // Default limit per page
                          $limit = 5;

                          // Check if limit is set from dropdown
                          if (isset($_GET['limit'])) {
                              $limit = $_GET['limit'];
                          }

                          // Fetch data from the table with limit
                          $sql = "SELECT * FROM komposisi_jenis_sampah_yogyakarta LIMIT $limit";
                          $result = $conn->query($sql);

                          $conn->close();
                        ?>
                        
                        <script>
                            // Function to change limit and reload page
                            function changeLimit(limit) {
                                window.location.href = "<?php echo $_SERVER['PHP_SELF']; ?>?limit=" + limit;
                            }
                        </script>
                        <label>Show data entry:
                            <select onchange="changeLimit(this.value)">
                                <option value="5" <?php if ($limit == 5) echo 'selected'; ?>> 5 </option>
                                <option value="10" <?php if ($limit == 10) echo 'selected'; ?>> 10 </option>
                                <option value="15" <?php if ($limit == 15) echo 'selected'; ?>> 15 </option>
                                <option value="25" <?php if ($limit == 25) echo 'selected'; ?>> 25 </option>
                            </select>
                        </label>
                    <
                    </div>
                            <thead>
                                <tr>
                                    <th>Tahun</th>
                                    <th>Kabupaten</th>
                                    <th>Sisa Makanan </th>
                                    <th>Kayu Ranting</th>
                                    <th>Kertas Karton</th>
                                    <th>Plastik</th>
                                    <th>Logam</th>
                                    <th>Kain</th>
                                    <th>Karet Kulit</th>
                                    <th>Kaca</th>
                                    <th>Lainnya</th>
                                </tr>
                            </thead>    
                            <tbody>
                                    <?php
                                    
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<tr>";
                                            echo "<td>" . $row["tahun"] . "</td>";
                                            echo "<td>" . $row["kabupaten"] . "</td>";
                                            echo "<td>" . $row["sisa_makanan"] . "</td>";
                                            echo "<td>" . $row["kayu_ranting"] . "</td>";
                                            echo "<td>" . $row["kertas_karton"] . "</td>";
                                            echo "<td>" . $row["plastik"] . "</td>";
                                            echo "<td>" . $row["logam"] . "</td>";
                                            echo "<td>" . $row["kain"] . "</td>";
                                            echo "<td>" . $row["karet_kulit"] . "</td>";
                                            echo "<td>" . $row["kaca"] . "</td>";
                                            echo "<td>" . $row["lainnya"] . "</td>";
                                            echo "</tr>";
                                        }
                                    } else {
                                        echo "<tr><td colspan='6'>No data found</td></tr>";
                                    }
                                    ?>
                            </tbody>    
                        </table>
                  </div>
              </div>
         </div>
      </div>
       
     
      

    </section>

   

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Jogreen</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
     
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/apexcharts/apexcharts.amd.js"></script>
  <script src="assets/vendor/apexcharts/apexcharts.esm.js"></script>
  <script src="assets/vendor/apexcharts/apexcharts.js"></script>
  <script src="assets/vendor/apexcharts/apexcharts.common.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>