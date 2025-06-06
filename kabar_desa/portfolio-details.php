<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio Details - Baker Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/detail_galeri.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Baker - v4.8.1
  * Template URL: https://bootstrapmade.com/baker-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main id="main">

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">



        <div class="container">
        <?php
      include '../koneksi/koneksi.php';
      $id_galeri = $_GET['id_galeri'];
      $data = mysqli_query($koneksi, "select * from galeri_publik where id_galeri='$id_galeri'");
      while ($d = mysqli_fetch_array($data)) {
      ?>
          <div class="row gy-4">

            <div class="col-lg-8">
              <div class="portfolio-details-slider swiper">
                <div class="swiper-wrapper align-items-center">

                  <div class="swiper-slide">
                    <img src="foto/<?php echo $d['foto1']; ?>" alt="">
                  </div>

                  <div class="swiper-slide">
                    <img src="foto/<?php echo $d['foto2']; ?>" alt="">
                  </div>

                  <div class="swiper-slide">
                    <img src="foto/<?php echo $d['foto3']; ?>" alt="">
                  </div>

                  <div class="swiper-slide">
                    <img src="foto/<?php echo $d['foto4']; ?>" alt="">
                  </div>

                  <div class="swiper-slide">
                    <img src="foto/<?php echo $d['foto5']; ?>" alt="">
                  </div>

                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>

            <div class="col-lg-4">
       
              <div class="portfolio-description">
                <h2><?php echo $d['judul_galeri']; ?></h2>
             
              </div>
            </div>

          </div>
          <?php
      }
      ?>
        </div>
   

    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>