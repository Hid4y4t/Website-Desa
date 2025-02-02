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
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/navbar.css" rel="stylesheet">
    <link href="assets/css/style_index.css" rel="stylesheet">
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-transparent">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><img src="assets/img/logo.png" alt=""></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto " href="index.php">Home</a></li>
                    <li class="dropdown"><a href="#"><span>Kabar Desa</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="kabar_desa/berita_desa.php">Berita Desa</a></li>
                            <li><a href="kabar_desa/breking_news.php">Breking News</a></li>
                            <li><a href="kabar_desa/galeri_desa.php">Galeri Desa</a></li>

                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="profile_desa/index.php">Profile Desa</a></li>

                    <li class="dropdown"><a href="#"><span>Formulir</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="formulir/formulir_1.php">Formulir Permohonan</a></li>
                            <li><a href="formulir/pengaduan.php">Aduan</a></li>

                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Data Desa</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="data_desa/kemiskinan.php">Kemiskinan</a></li>
                            <li><a href="data_desa/pendidikan.php">Pendidikan</a></li>
                            <li><a href="data_desa/rencana_pembangunan.php">Fasilitas & Pembangunan</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto active" href="">Laporan APBD</a></li>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
    
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center justify-content-center">
        <div class="container position-relative">
            <?php
            if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == "gagal") {
                    echo "Login gagal! username dan password salah!";
                } else if ($_GET['pesan'] == "logout") {
                    echo "  <h2>Anda telah berhasil logout</h2>";
                } else if ($_GET['pesan'] == "belum_login") {
                    echo "Anda harus login untuk mengakses halaman";
                }
            }
            ?>

            <h1>Selamat Datang </h1>
            <h2> Di WEB Desa Ngadiroyo</h2>


            <!-- <a href="#about" class="btn-get-started scrollto">Get Started</a> -->
        </div>
    </section><!-- End Hero -->



    <section id="service" class="services pt-4">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
           
            <center> 
                <h2>Artikel Terkini</h2>
            </center>
            <hr>

            </div>

            <div class="row gy-4">
                <?php
                include 'koneksi/koneksi.php';
                $batas = 10;
                $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
                $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

                $previous = $halaman - 1;
                $next = $halaman + 1;

                $data = mysqli_query($koneksi, "select * from artikel_desa ");
                $jumlah_data = mysqli_num_rows($data);
                $total_halaman = ceil($jumlah_data / $batas);

                $data_pegawai = mysqli_query($koneksi, "select * from artikel_desa ORDER BY id_artikel DESC limit $halaman_awal, $batas");
                $nomor = $halaman_awal + 1;

                while ($d = mysqli_fetch_array($data_pegawai)) {
                ?>
                    <div class="col-lg-3 col-md-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="card" style="background-color: #ffffa7;">
                            <div class="card-img" style="width: 100%; ">
                                <img src="kabar_desa/berita_desa/<?php echo $d['foto']; ?>" alt="" class="img-fluid">
                            </div>
                            <h5 class="stretched-link" style="margin: 5px;"><?php echo $d['judul_artikel']; ?></h5>
                       
                            <p > <?php echo substr($d['keterangan'], 0, 50) ?> 
                            <a href="kabar_desa/view_artikel.php?id_artikel=<?php echo $d['id_artikel']; ?>" class="stretched-link" style="color: blue ;"> Baca Selengkapnya . .</a></p>


                        </div>
                    </div><!-- End Card Item -->

                <?php
                }
                ?>
                
                <nav>
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link" <?php if ($halaman > 1) {
                                                        echo "href='?halaman=$Previous'";} ?>>Previous</a>
                        </li>
                        <?php
                        for ($x = 1; $x <= $total_halaman; $x++) {
                        ?>
                            <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                        <?php
                        }
                        ?>
                        <li class="page-item">
                            <a class="page-link" <?php if ($halaman < $total_halaman) {
                                                        echo "href='?halaman=$next'";
                                                    } ?>>Next</a>
                        </li>
                    </ul>

            </div>

        </div>
    </section><!-- End Services Section -->

    <section id="about" class="about">
        <div class="container">

            <div class="row content  mt-5">

                <div class="col-lg-6 pt-4 pt-lg-0">
                    <h2>Sejarah </h2>
                    <?php
                    include 'koneksi/koneksi.php';

                    $data = mysqli_query($koneksi, "select * from profile_desa");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>

                        <p> <?php echo $d['sejarah_desa']; ?></p>

                    <?php
                    }
                    ?>

                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">

                    <div class="row  card-stats" data-aos="fade-up" data-aos-delay="400">
                        <?php

                        include 'koneksi/koneksi.php';
                        $data_warga = mysqli_query($koneksi, "SELECT * FROM data_warga_desa");
                        $jumlah_warga = mysqli_num_rows($data_warga);
                        ?>



                        <div class="col-lg-3 col-6 stats-card">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="<?php echo $jumlah_warga; ?>" data-purecounter-duration="1" class="purecounter"></span>
                                <p>Warga</p>
                            </div>
                        </div><!-- End Stats Item -->
                        <?php

                        include 'koneksi/koneksi.php';
                        $data_miskin = mysqli_query($koneksi, "SELECT * FROM data_kemiskinan");
                        $jumlah_miskin = mysqli_num_rows($data_miskin);
                        ?>

                        <div class="col-lg-3 col-6 stats-card">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="<?php echo $jumlah_miskin; ?>" data-purecounter-duration="1" class="purecounter"></span>
                                <p>Tidak Mampu</p>
                            </div>
                        </div><!-- End Stats Item -->

                        <?php

                        include 'koneksi/koneksi.php';
                        $data_umum = mysqli_query($koneksi, "SELECT * FROM fasilitas_umum");
                        $jumlah_umum = mysqli_num_rows($data_umum);
                        ?>

                        <div class="col-lg-3 col-6 stats-card">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="<?php echo $jumlah_umum; ?>" data-purecounter-duration="1" class="purecounter"></span>
                                <p>Fasilitas Desa</p>
                            </div>
                        </div><!-- End Stats Item -->

                        <?php

                        include 'koneksi/koneksi.php';
                        $data_pembangunan = mysqli_query($koneksi, "SELECT * FROM rencana_pembangunan");
                        $jumlah_pembangunan = mysqli_num_rows($data_pembangunan);
                        ?>
                        <div class="col-lg-3 col-6 stats-card">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="<?php echo $jumlah_pembangunan; ?>" data-purecounter-duration="1" class="purecounter"></span>
                                <p>Rencana Pembangunan</p>
                            </div>
                        </div><!-- End Stats Item -->

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15808.975925589264!2d110.94993523291406!3d-7.869518618671969!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a2c4830cc0615%3A0x5027a76e356aa10!2sNgadiroyo%2C%20Kec.%20Nguntoronadi%2C%20Kabupaten%20Wonogiri%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1686360899863!5m2!1sid!2sid" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


                    </div>


                </div>
            </div>

        </div>
    </section><!-- End About Section -->




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

    <!-- Vendor JS Files -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/mobile.js"></script>
</body>

</html>