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
    <link href="../assets/css/galeri.css" rel="stylesheet">


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
            <h1>GALERI <br>
            </h1>

            <h2>Desa Ngadiroyo</h2>
            <!-- <a href="#about" class="btn-get-started scrollto">Get Started</a> -->
        </div>
    </section><!-- End Hero -->
    <br>


    <section id="portfolio" class="portfolio">
        <div class="container">



            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">Semua</li>
                        <li data-filter=".kegiatan">Kegiatan desa</li>
                        <li data-filter=".fasilitas">Fasilitas Desa</li>
                        <li data-filter=".produk">informasi desa</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container">


                <?php
                //koneksi
                include '../koneksi/koneksi.php';

                $data = mysqli_query($koneksi, "select * from galeri_publik");
                while ($d = mysqli_fetch_array($data)) {
                ?>

                    <div class="col-lg-4 col-md-6 portfolio-item <?php echo $d['judul_galeri']; ?>">
                        <img src="foto/<?php echo $d['foto1']; ?>" class="img-fluid" alt="">
                        <div class="portfolio" style=" background-color:rgb(179,179,255, .5) ; padding: 10px; border-radius: 0 0 10px 10px;">
                           
                              <center>
                              <a href="foto/<?php echo $d['foto1']; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="<?php echo $d['judul_galeri']; ?>"> <button type="button" class="btn btn-outline-warning">Lihat</button></a>
                        
                        <a href="portfolio-details.php?id_galeri=<?php echo $d['id_galeri']; ?>" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox details-link" title="Portfolio Details"><button type="button" class="btn btn-outline-primary">Lihat Semua</button></a>
                  
                              </center>
                        </div>


                    </div>

                <?php
                }
                ?>


            </div>

        </div>
    </section><!-- End Portfolio Section -->

    <br>

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
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: [license-url] -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/ -->

                </div>
            </div>
        </footer>
    </div><!-- End Footer -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
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