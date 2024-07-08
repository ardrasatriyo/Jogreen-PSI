<?php

@include 'koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Jogreen-Timbulan Sampah</title>
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

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
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

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

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
              <i class="bi bi-circle"></i><span>Komposisi Sampah</span>
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
            <a href="forms-elements.html">
              <i class="bi bi-circle"></i><span>Form Pelaporan</span>
            </a>
          </li>
          <li>
            <a href="forms-layouts.html">
              <i class="bi bi-circle"></i><span>Histori Pelaporan</span>
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
        <a class="nav-link collapsed" href="pages-register.html">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Komposisi Sampah</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Data Statistik</li>
          <li class="breadcrumb-item active">Komposisi Sampah</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">

      <!-- Grafik bar-chart timbulan sampah -->
      
      <div class="row">
        <div class="col-12">
           <div class="card">
              <div class="card-body">
                  <h5 class="card-title">Komposisi Sampah</h5>

                    <!-- Filters -->
                    <div>
                        <label for="kabupatenFilter">Kabupaten:</label>
                        <select id="kabupatenFilter">
                            <option value="all">All</option>
                            <!-- Populate this with options dynamically or manually -->
                            <option value="Kulonprogo">Kab. Kulon Progo</option>
                            <option value="Bantul">Kab. Bantul</option>
                            <option value="Sleman">Kab. Sleman</option>
                            <option value="Gunungkidul">Kab. Gunung Kidul</option>
                            <option value="Yogyakarta">Kota Yogyakarta</option>
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

                                let url = 'filterdataedit2.php';
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
                      $sql = "SELECT 
                            kabupaten,
                            tahun,
                            SUM(sisa_makanan) as total_sisa_makanan,
                            SUM(kayu_ranting) as total_kayu_ranting,
                            SUM(kertas_karton) as total_kertas_karton,
                            SUM(plastik) as total_plastik,
                            SUM(logam) as total_logam,
                            SUM(kain) as total_kain,
                            SUM(karet_kulit) as total_karet_kulit,
                            SUM(kaca) as total_kaca,
                            SUM(lainnya) as total_lainnya
                            FROM komposisi_jenis_sampah";

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
                            $system_content .= "Kabupaten: " . $item['kabupaten'] . 
                           ", Sisa Makanan: " . $item['total_sisa_makanan'] . 
                           ", Kayu Ranting: " . $item['total_kayu_ranting'] . 
                           ", Kertas Karton: " . $item['total_kertas_karton'] . 
                           ", Plastik: " . $item['total_plastik'] . 
                           ", Logam: " . $item['total_logam'] . 
                           ", Kain: " . $item['total_kain'] . 
                           ", Karet Kulit: " . $item['total_karet_kulit'] . 
                           ", Kaca: " . $item['total_kaca'] . 
                           ", Lainnya: " . $item['total_lainnya'] . 
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
                          $sql = "SELECT * FROM komposisi_jenis_sampah LIMIT $limit";
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
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
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