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
  <link href="../assets/css/artikel.css" rel="stylesheet">
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
              <li><a href="../data_desa/rencana_pembangunan.php">Fasilitas & Pembangunan</a></li>

            </ul>
          </li>
          <li><a class="nav-link scrollto active" href="../laporan/index.php">Laporan APBD</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
 

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container position-relative">
      <h1>Berita, Informasi, dan Kegiatan </h1>
      <h2>Desa Ngadiroyo</h2>
      <!-- <a href="#about" class="btn-get-started scrollto">Get Started</a> -->
    </div>
  </section><!-- End Hero -->
  <br>







  <div class="container-fluid">
    <div class="row">

      <div class="col-lg-8 col-md-8">

        <main id="main">

          <!-- ======= Services Section ======= -->
          <section id="services" class="services ">
            <div class="container" data-aos="fade-up">

              <div class="section-title">
                <h2>Desa Ngadiroyo</h2>

              </div>
              <div class="row" data-aos="fade-up" data-aos-delay="200">


                <?php
                //koneksi
                include '../koneksi/koneksi.php';
                $no = 1;
                $data = mysqli_query($koneksi, "select * from artikel_desa ORDER BY id_artikel DESC "); 
                while ($d = mysqli_fetch_array($data)) {
                ?>

                  <div class="col-md-6">
                    <div class="icon-box">
                      <i><img src="berita_desa/<?php echo $d['foto']; ?>" style="width: 100px;" alt=""></i>
                      <h4><?php echo $d['judul_artikel']; ?><br>
                        <span style="font-size: 12px; color: grey; font-style: italic;"><?php echo $d['waktu']; ?></span>
                      </h4>
                      <p><?php echo substr($d['keterangan'], 0, 50)?> 
                      
                   <a href="view_artikel.php?id_artikel=<?php echo $d['id_artikel']; ?>" style="color: blue ;"> Baca Selengkapnya . .</a>

                   
                    </div>
                  </div>

                <?php
                }
                ?>


             




              </div>
            </div>
          </section><!-- End Services Section -->

        </main><!-- End #main -->

      </div>

      <div class="col-lg-4 col-md-4 mt-4">

        <section style="background-color:rgb(180,180,255, 0.5) ; border-radius: 10px;  padding: 10px;">
          <div class="card text-center">
            <div class="card-header">
              <b>
                <h3> Informasi</h3>
              </b>
            </div>
            <?php
            include "../koneksi/koneksi.php";
            $data = mysqli_query($koneksi, "select * from informasi");
            while ($d = mysqli_fetch_array($data)) {
            ?>
              <div class="card-body">
                <h5 class="card-title"><?php echo $d['judul'] ?></h5>
                <p class="card-text"><?php echo $d['keterangan'] ?>"</p>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
              </div>
              <div class="card-footer text-muted">
                <b> <?php echo $d['waktu'] ?></b>
              </div>
            <?php
            }
            ?>
          </div>
        </section>
        <br><br>
        <section style="background-color:rgb(180,180,255, 0.5) ; border-radius: 10px;  padding: 10px;">
          <center>
            <h4>Kirim Masukan</h4>
          </center>
          <form action="proses_masukan.php" method="post">

          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" id="exampleFormControlInput1">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">NIK</label>
            <input type="text" name="nik" class="form-control" id="exampleFormControlInput1">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="pesan"></textarea>
            <input type="hidden" name="waktu" >
          </div>
          <button type="submit" class="btn btn-primary">Kirim</button>

          </form>
        </section>
      </div>
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