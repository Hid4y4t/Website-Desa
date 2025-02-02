<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desa</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="../assets/css/navbar.css" rel="stylesheet">
  <link href="../assets/css/berita_desa.css" rel="stylesheet">
  <style>

  </style>
</head>

<body>
   <!-- ======= Header ======= -->
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
              <!-- <li><a href="../data_desa/rencana_pembangunan.php">Fasilitas & Pembangunan</a></li> -->

            </ul>
          </li>
          <li><a class="nav-link scrollto active" href="../laporan/index.php">Laporan APBD</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <!-- navbar mobile -->
  <!-- <div class="mobile-version">
        <nav class="navbar2 fixed-bottom" id="mobile">
            <div class="menu-bawah ">
                <ul>
                    <li>
                        <a href="index.php"><img src="assets/img-mobile/home.png" alt=""> Home</a>
                    </li>
                    <li class="bimbingan-karir2">
                        <a href="#"><img src="assets/img-mobile/newspaper.png" alt="">Kabar Desa</a>
                    </li>

                    <li>
                        <a href="#"> <img src="assets/img-mobile/news-report.png" alt=""> News</a>
                    </li>

                    <li>
                        <a href="#"><img src="assets/img-mobile/contract.png" alt=""> Formulir</a>
                    </li>
                    <li>
                        <a href="#"><img src="assets/img-mobile/cv.png" alt=""> Profile Desa</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="bimbingan-karir" id="mobile2">
            <div class="keluar">
                <img src="assets/img-mobile/close.png" alt=""><br>
            </div>
            <a href="riasec/index.html"><button> Berita Desa </button></a>
            <a href="konseling/index.html"><button> Galeri Desa</button></a>

        </div>
    </div> -->
  <!-- end navbar mobile -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container position-relative">
      <h1>Berita Terpopuler </h1>
      
      <!-- <a href="#about" class="btn-get-started scrollto">Get Started</a> -->
    </div>
  </section><!-- End Hero -->
  <br>
  <div class="container">
          <!-- <h2 class="alert alert-info mt-4">
             BERITA SEPUTAR PENDIDIKAN
          </h2> -->
          
          <div class="row mt-5">
              <?php
                  include "data.php";
                  include "preview_image.php";
  
                  // melakukan looping, menggunakan $xml->channel->item
                  // karena isi berita ada di dalam objek item
                  // silahkan lihat kembali tampilan xml yang dibuat dengan mengakses google news
                  foreach($xml->channel->item as $data){
                      
              ?> 
              <div class="col-lg-3 mb-4">
                  <div class="card" style="border: none;">
  
                      <!-- menambahkan css ke card header
                      css ini digunakan untuk membuat background gambar dari artikel yang dibuat  -->
  
                      <div class="card-header" style="
                      background-size: cover;
                      background-position: center;
                      height: 170px;
                      border-radius: 15px;
                      background-image: url('<?php echo getSiteOG($data->link); ?>');">
  
                      </div>
                      <div class=" p-0 mt-3">
                          <p>
                              <!-- substr digunakan untuk menyingkat string agar tidak terlalu panjang -->
                        <?php echo substr($data->title, 0, 68)."..."; ?>
                          </p>
                          <a href="<?php echo $data->link; ?>" class="btn btn-sm btn-primary">Detail</a>
                         
                      </div>
                  </div>
              </div>
              <?php
                  }
              ?>
          </div>
  
      </div>
  <br><br>

  <!-- ======= Footer ======= -->
  <div class="footers">
    <footer id="footer">
      <div class="container">
        <h3>Desa Ngadiroyo</h3>
        <p>Kabupaten Wonogiri, Jawa Tengah</p>
        <div class="social-links">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
        <div class="copyright">
          &copy; Copyright <strong><span>Desa Ngadiroyo</span></strong>. All Rights Reserved
        </div>
        <div class="credits">

        </div>
      </div>
    </footer>
  </div><!-- End Footer -->


  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
  <script src="../assets/js/mobile.js"></script>

</body>

</html>