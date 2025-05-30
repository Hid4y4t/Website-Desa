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
  <link href="../assets/css/rencana.css" rel="stylesheet">


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
              <li><a href="../kabar_desa/berita_desa.php">Berita Desa</a></li>
              <li><a href="../kabar_desa/breking_news.php">Breking News</a></li>
              <li><a href="../kabar_desa/galeri_desa.php">Galeri Desa</a></li>

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
              <li><a href="kemiskinan.php">Kemiskinan</a></li>
              <li><a href="pendidikan.php">Pendidikan</a></li>
              <li><a href="rencana_pembangunan.php">Fasilitas & Pembangunan</a></li>

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
      <h1>Rencana Pembangunan</h1>
      <h2>Desa Ngadiroyo</h2>
      <!-- <a href="#about" class="btn-get-started scrollto">Get Started</a> -->
    </div>
  </section><!-- End Hero -->
  <br>

  <section id="contact" class="contact">
    <div class="container">



      <div class="row">

        <div class="col-lg-8">

          <div class="row">
            <div class="col-md-12">
              <div class="info-box">
                <i class="bx bx-home"></i>
                <h3>Total Rencana Pembangunan</h3>
                <?php

                include '../koneksi/koneksi.php';

                // mengambil data barang
                $data_pembangunan = mysqli_query($koneksi, "SELECT * FROM rencana_pembangunan");

                // menghitung data barang
                $jumlah_pembangunan = mysqli_num_rows($data_pembangunan);
                ?>


                <h4><?php echo $jumlah_pembangunan; ?></h4>


              </div>
            </div>
            <div class="col-md-12">
              <div class="info-box mt-4">

                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Jenis Pembangunan</th>
                        <th scope="col">Nama Pembangunan</th>
                        <th scope="col">Rencana Mulai</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody class="table-group-divider">
                      <?php
                      //koneksi
                      include '../koneksi/koneksi.php';
                      $no = 1;
                      $data = mysqli_query($koneksi, "select * from rencana_pembangunan");
                      while ($d = mysqli_fetch_array($data)) {
                      ?>
                        <tr>


                          <td><?php echo $no++; ?></td>
                          <td><?php echo $d['jenis_pembangunan']; ?></td>
                          <td><?php echo $d['nama_pembangunan']; ?></td>



                          <td> <?php echo $d["rencana_mulai_pembangunan"];   ?></td>



                          <td>


                            <a href="view_rencana.php?id_pembangunan=<?php echo $d['id_pembangunan']; ?>" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox details-link" title="Portfolio Details"><button type="button" class="btn btn-outline-primary">Detail</button></a>
                          </td>

                        </tr>
                      <?php
                      }
                      ?>
                    </tbody>
                  </table>
                </div>



              </div>
            </div>
<br>
            <!-- ========================================== -->
            <div class="col-md-12 mt-4">
              <div class="info-box">
                <i class="bx bx-home"></i>
                <h3>Total Fasilitas / Aset Desa</h3>
                <?php

                include '../koneksi/koneksi.php';

                // mengambil data barang
                $data_fasilitas = mysqli_query($koneksi, "SELECT * FROM fasilitas_umum");

                // menghitung data barang
                $jumlah_fasilitas = mysqli_num_rows($data_fasilitas);
                ?>


                <h4><?php echo $jumlah_fasilitas; ?></h4>


              </div>
            </div>
            <div class="col-md-12">
              <div class="info-box mt-4">

                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">NAMA</th>
                        <th scope="col">NO ASET</th>
                        <th scope="col">LOKASI</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody class="table-group-divider">
                      <?php
                      //koneksi
                      include '../koneksi/koneksi.php';
                      $no = 1;
                      $data = mysqli_query($koneksi, "select * from fasilitas_umum");
                      while ($d = mysqli_fetch_array($data)) {
                      ?>
                        <tr>


                          <td><?php echo $no++; ?></td>
                          <td><?php echo $d['nama']; ?></td>
                          <td><?php echo $d['nomor']; ?></td>



                          <td> <?php echo $d["lokasi"];   ?></td>




                        </tr>
                      <?php
                      }
                      ?>
                    </tbody>
                  </table>
                </div>



              </div>
            </div>

          </div>

        </div>

        <div class="col-lg-4">
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

          <section class="mt-3" style="background-color:rgb(180,180,255, 0.5) ; border-radius: 10px;  padding: 10px;">
            <div class="card text-center">
              <div class="card-header">
                <b>
                  <h3>Informasi Lokasi Desa</h3>
                </b>
              </div>
              <div class="card-body">
                <div class="lokasi-desa">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d255065.6290717441!2d112.00252451788667!3d-2.6965434746634918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e0845d898c9d54d%3A0xa1164333c8792c29!2sBanua%20Usang%2C%20Kec.%20Danau%20Sembuluh%2C%20Kabupaten%20Seruyan%2C%20Kalimantan%20Tengah!5e0!3m2!1sid!2sid!4v1658816982960!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="detail-desa table-responsive">
                  <table class="table caption-top">
                    <caption>Detail</caption>
                    <?php
                    include '../koneksi/koneksi.php';

                    $data = mysqli_query($koneksi, "select * from profile_desa");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                      <tbody>
                        <tr>


                          <td>Nama Desa</td>
                          <td> <?php echo $d['nama_desa']; ?></td>
                        </tr>
                        <tr>


                          <td>kabupaten</td>
                          <td> <?php echo $d['kabupaten']; ?></td>
                        </tr>

                        <tr>

                          <td>Kode pos </td>
                          <td> <?php echo $d['kode_pos']; ?></td>
                        </tr>
                        <tr>

                          <td>Alamat Kantor Desa </td>
                          <td> <?php echo $d['alamat_kantor']; ?></td>
                        </tr>
                        <tr>

                          <td>Telp</td>
                          <td> <?php echo $d['telp']; ?></td>
                        </tr>
                        <tr>

                          <td>Email</td>
                          <td> <?php echo $d['email']; ?></td>
                        </tr>
                        <tr>

                          <td>Kd.Wil Adm. </td>
                          <td> <?php echo $d['kd_wil']; ?></td>
                        </tr>
                      </tbody>

                    <?php
                    }
                    ?>

                  </table>
                </div>
              </div>

            </div>

          </section>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->


  <!-- ======= Footer ======= -->
  <div class="footers">
    <footer id="footer">
      <div class="container">
        <h3>Desa Ngadiroyo</h3>
        <p>Kabupaten Wonogiri, Jawa Tengah Tengah</p>
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
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: [license-url] -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/ -->

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