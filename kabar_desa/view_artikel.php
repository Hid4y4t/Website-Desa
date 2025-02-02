<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Folio Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Playfair+Display:400,400i,500,500i,600,600i,700,700i,900,900i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/view_artikel.css" rel="stylesheet">
  <link href="../assets/css/navbar.css" rel="stylesheet">


</head>

<body>


  <header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><img src="../assets/img/logo.png" alt=""></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="../index.php">Home</a></li>
          <li class="dropdown"><a href="#"><span>Kabar Desa</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="berita_desa.php">Berita Desa</a></li>
              <li><a href="breking_news.php">Breking News</a></li>
              <li><a href="galeri_desa.php">Galeri Desa</a></li>

            </ul>
          </li>
          <li><a class="nav-link scrollto" href="../profile_desa/index.php">Profile Desa</a></li>

          <li class="dropdown"><a href="#"><span>Formulir</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="../formulir/formulir_1.php">Formulir Permohonan</a></li>
              <li><a href="../formulir/pengaduan.php">Aduan</a></li>

            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Data Desa</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="../data_desa/kemiskinan.php">Kemiskinan</a></li>
              <li><a href="../data_desa/pendidikan.php">Pendidikan</a></li>
              <li><a href="../data_desa/rencana_pembangunan.php">Rencana Pembangunan</a></li>
            </ul>
          </li>
          <!-- <li><a class="nav-link scrollto active" href="../laporan/index.php">Laporan APBD</a></li> -->

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>




  <main id="main">

    <!-- ======= About Section ======= -->
    <div id="about" class="paddsection">

      <div class="container">
        <div class="section-title">
          <h2>View</h2>
          <p>Berita Desa</p>
          <a href="berita_desa.php" style="text-decoration: none; font-size: 25px; ">
            <p>
              <li class="bi-backspace" style="list-style: none;"> Kembali</li>
              <p>
          </a>
        </div><br>
        <?php
        include '../koneksi/koneksi.php';
        $id_artikel = $_GET['id_artikel'];
        $data = mysqli_query($koneksi, "select * from artikel_desa where id_artikel='$id_artikel'");
        while ($d = mysqli_fetch_array($data)) {
        ?>
          <div class="row justify-content-between">

            <div class="col-lg-4 ">
              <div class="div-img-bg">
                <div class="about-img">
                  <img src="berita_desa/<?php echo $d['foto']; ?>" class="img-responsive" alt="me">
                </div>
              </div>
            </div>

            <div class="col-lg-7">
              <div class="about-descr">

                <p class="p-heading"><?php echo $d['judul_artikel']; ?> <br>
                  <span style="font-size: 20px; color: grey; font-style: italic;"><?php echo $d['waktu']; ?></span>
                </p>
                <p class="separator"><?php echo $d['keterangan']; ?></p>
                <a href="berita_desa.php" style="text-decoration: none; font-size: 20px; ">
                  <p>
                    <li class="bi-backspace" style="list-style: none;"> Kembali</li>
                    <p>
                </a>
              </div>

            </div>
          </div>

        <?php
        }
        ?>
      </div>
    </div><!-- End About Section -->



  </main><!-- End #main -->


  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/typed.js/typed.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>