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
    <link href="../assets/css/kemiskinan.css" rel="stylesheet">


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
            <h1>Data Kemiskinan</h1>
            <h2>Desa Ngadiroyo</h2>
            <!-- <a href="#about" class="btn-get-started scrollto">Get Started</a> -->
        </div>
    </section><!-- End Hero -->

    <br>

    <!-- End of Main Content -->


    <div class="container-fluid kemiskinan">

        <!-- Page Heading -->

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h4 class="m-0 font-weight-bold ">
                    <center>Jumlah Data Warga miskin Desa Ngadiroyo</center>
                </h4>
            </div>
            <div class="card-body">

                <div class="row">
                    <div class="col-lg-6 col-md-6 mt-4">
                        <img src="img/data-kemiskinan.png" alt="">
                    </div>

                    <div class="col-lg-6 col-md-6 stats-card">

                        <div class="stats-item text-center w-100 h-100">

                            <?php

                            include '../koneksi/koneksi.php';

                            // mengambil data barang
                            $data_warga_miskin = mysqli_query($koneksi, "SELECT * FROM data_kemiskinan");

                            // menghitung data barang
                            $jumlah_warga_miskin = mysqli_num_rows($data_warga_miskin);
                            ?>
                            <span data-purecounter-start="0" data-purecounter-end="<?php echo $jumlah_warga_miskin; ?>" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Miskin</p>


                        </div>

                    </div><!-- End Stats Item -->

                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

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