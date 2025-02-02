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
    <link href="../assets/css/pendidikan.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">

    <!-- jquery -->
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <style>
        .dataTables_wrapper .dataTables_filter input {
            border-radius: 10px;
            box-shadow: 1px 1px 1px 1px gray;
            border: 1px solid rgb(170, 170, 170);


        }

        select {
            border-radius: 5px;
            /* display: none; */
            border: 1px solid rgb(170, 170, 170);
        }
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
            <h1>Data Pendidikan</h1>
            <h2>Kec. Nguntoronadi, Kabupaten Wonogiri, Jawa Tengah</h2>
            <!-- <a href="#about" class="btn-get-started scrollto">Get Started</a> -->
        </div>
    </section><!-- End Hero -->
    <br><br>


    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Fasilitas Pendidikan</h2>
                <p>Jumlah Jenis Pendidikan yang ada di Desa Ngadiroyo</p>
            </div>



            <div class="row">

                <?php
                include '../koneksi/koneksi.php';
                $data_sd = mysqli_query($koneksi, "SELECT * FROM sd_mi");
                $jumlah_sd = mysqli_num_rows($data_sd);
                ?>

                <div class="col-lg-4 col-md-6 icon-box">
                    <div class="icon"><i class="bi bi-briefcase"></i></div>
                    <h4 class="title"><a href="">SD/MI</a></h4>
                    <p class="description"><?php echo $jumlah_sd; ?></p>
                </div>

                <?php
                include '../koneksi/koneksi.php';
                $data_smp = mysqli_query($koneksi, "SELECT * FROM smp_sltp");
                $jumlah_smp = mysqli_num_rows($data_smp);
                ?>
                <div class="col-lg-4 col-md-6 icon-box">
                    <div class="icon"><i class="bi bi-card-checklist"></i></div>
                    <h4 class="title"><a href="">SMP</a></h4>
                    <p class="description"><?php echo $jumlah_smp; ?></p>
                </div>


                <?php
                include '../koneksi/koneksi.php';
                $data_sma = mysqli_query($koneksi, "SELECT * FROM sma_slta");
                $jumlah_sma = mysqli_num_rows($data_sma);
                ?>
                <div class="col-lg-4 col-md-6 icon-box">
                    <div class="icon"><i class="bi bi-bar-chart"></i></div>
                    <h4 class="title"><a href="">SMA</a></h4>
                    <p class="description"><?php echo $jumlah_smp; ?></p>
                </div>

                <?php
                include '../koneksi/koneksi.php';
                $data_non = mysqli_query($koneksi, "SELECT * FROM non_formal");
                $jumlah_non = mysqli_num_rows($data_non);
                ?>
                <div class="col-lg-4 col-md-6 icon-box">
                    <div class="icon"><i class="bi bi-binoculars"></i></div>
                    <h4 class="title"><a href="">Non Formal</a></h4>
                    <p class="description"><?php echo $jumlah_non; ?></p>
                </div>


                <?php
                include '../koneksi/koneksi.php';
                $data_khusus = mysqli_query($koneksi, "SELECT * FROM khusus");
                $jumlah_khusus = mysqli_num_rows($data_khusus);
                ?>
                <div class="col-lg-4 col-md-6 icon-box">
                    <div class="icon"><i class="bi bi-brightness-high"></i></div>
                    <h4 class="title"><a href="">Khusus</a></h4>
                    <p class="description"><?php echo $jumlah_khusus; ?></p>
                </div>

                <?php
                include '../koneksi/koneksi.php';
                $data_univ = mysqli_query($koneksi, "SELECT * FROM universitas");
                $jumlah_univ = mysqli_num_rows($data_univ);
                ?>
                <div class="col-lg-4 col-md-6 icon-box">
                    <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                    <h4 class="title"><a href="">Universitas</a></h4>
                    <p class="description"><?php echo $jumlah_univ; ?></p>
                </div>



            </div>

        </div>
    </section><!-- End Services Section -->




    <div class="container">
        <h2>Daftar Pendidikan </h2>

    </div>




    <!-- End of Main Content -->


    <div class="container">

        <!-- Page Heading -->

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">SD / MI</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered display" id="table_id" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NPSN</th>
                                <th>Nama Sekolah</th>
                                <th>Status</th>
                                <th>Alamat</th>

                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>NPSN</th>
                                <th>Nama Sekolah</th>
                                <th>Status</th>
                                <th>Alamat</th>

                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                            //koneksi
                            include '../koneksi/koneksi.php';
                            $no = 1;
                            $data = mysqli_query($koneksi, "select * from sd_mi");
                            while ($d = mysqli_fetch_array($data)) {
                            ?>
                                <tr>
                                <td><?php echo $no++; ?></td>
                                    <td><?php echo $d['npsn']; ?></td>
                                    <td><?php echo $d['nama_sekolah']; ?></td>
                                    <td><?php echo $d['status']; ?></td>
                                    <td><?php echo $d['alamat']; ?></td>

                                </tr>
                            <?php
                            }
                            ?>


                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">SMP / SLTP</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered display" id="table_id" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NPSN</th>
                                <th>Nama Sekolah</th>
                                <th>Status</th>
                                <th>Alamat</th>

                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>NPSN</th>
                                <th>Nama Sekolah</th>
                                <th>Status</th>
                                <th>Alamat</th>

                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                            //koneksi
                            include '../koneksi/koneksi.php';
                            $no = 1;
                            $data = mysqli_query($koneksi, "select * from smp_sltp");
                            while ($d = mysqli_fetch_array($data)) {
                            ?>
                                <tr>
                                <td><?php echo $no++; ?></td>
                                    <td><?php echo $d['npsn']; ?></td>
                                    <td><?php echo $d['nama_sekolah']; ?></td>
                                    <td><?php echo $d['status']; ?></td>
                                    <td><?php echo $d['alamat']; ?></td>

                                </tr>
                            <?php
                            }
                            ?>


                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">SMA / SLTA</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered display" id="table_id" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NPSN</th>
                                <th>Nama Sekolah</th>
                                <th>Status</th>
                                <th>Alamat</th>

                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>NPSN</th>
                                <th>Nama Sekolah</th>
                                <th>Status</th>
                                <th>Alamat</th>

                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                            //koneksi
                            include '../koneksi/koneksi.php';
                            $no = 1;
                            $data = mysqli_query($koneksi, "select * from sma_slta");
                            while ($d = mysqli_fetch_array($data)) {
                            ?>
                                <tr>
                                <td><?php echo $no++; ?></td>
                                    <td><?php echo $d['npsn']; ?></td>
                                    <td><?php echo $d['nama_sekolah']; ?></td>
                                    <td><?php echo $d['status']; ?></td>
                                    <td><?php echo $d['alamat']; ?></td>

                                </tr>
                            <?php
                            }
                            ?>


                        </tbody>
                    </table>
                </div>
            </div>


            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">NON FORMAL</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered display" id="table_id" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NPSN</th>
                                <th>Nama Sekolah</th>
                                <th>Status</th>
                                <th>Alamat</th>

                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>NPSN</th>
                                <th>Nama Sekolah</th>
                                <th>Status</th>
                                <th>Alamat</th>

                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                            //koneksi
                            include '../koneksi/koneksi.php';
                            $no = 1;
                            $data = mysqli_query($koneksi, "select * from non_formal");
                            while ($d = mysqli_fetch_array($data)) {
                            ?>
                                <tr>
                                <td><?php echo $no++; ?></td>
                                    <td><?php echo $d['npsn']; ?></td>
                                    <td><?php echo $d['nama_sekolah']; ?></td>
                                    <td><?php echo $d['status']; ?></td>
                                    <td><?php echo $d['alamat']; ?></td>

                                </tr>
                            <?php
                            }
                            ?>


                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">KHUSUS</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered display" id="table_id" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NPSN</th>
                                <th>Nama Sekolah</th>
                                <th>Status</th>
                                <th>Alamat</th>

                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>NPSN</th>
                                <th>Nama Sekolah</th>
                                <th>Status</th>
                                <th>Alamat</th>

                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                            //koneksi
                            include '../koneksi/koneksi.php';
                            $no = 1;
                            $data = mysqli_query($koneksi, "select * from khusus");
                            while ($d = mysqli_fetch_array($data)) {
                            ?>
                                <tr>
                                <td><?php echo $no++; ?></td>
                                    <td><?php echo $d['npsn']; ?></td>
                                    <td><?php echo $d['nama_sekolah']; ?></td>
                                    <td><?php echo $d['status']; ?></td>
                                    <td><?php echo $d['alamat']; ?></td>

                                </tr>
                            <?php
                            }
                            ?>


                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">UNIVERSITAS</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered display" id="table_id" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NPSN</th>
                                <th>Nama Sekolah</th>
                                <th>Status</th>
                                <th>Alamat</th>

                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>NPSN</th>
                                <th>Nama Sekolah</th>
                                <th>Status</th>
                                <th>Alamat</th>

                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                            //koneksi
                            include '../koneksi/koneksi.php';
                            $no = 1;
                            $data = mysqli_query($koneksi, "select * from universitas");
                            while ($d = mysqli_fetch_array($data)) {
                            ?>
                                <tr>
                                <td><?php echo $no++; ?></td>
                                    <td><?php echo $d['npsn']; ?></td>
                                    <td><?php echo $d['nama_sekolah']; ?></td>
                                    <td><?php echo $d['status']; ?></td>
                                    <td><?php echo $d['alamat']; ?></td>

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
    <!-- /.container-fluid -->

    <!-- ======= Footer ======= -->
    <div class="footers">
        <footer id="footer">
            <div class="container">
                <h3>Desa Ngadiroyo</h3>
                <p>Kabupaten Seruyan, Kalimantan Tengah</p>
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






    <!-- Custom scripts for all pages-->
    <script src="../assets/js/sb-admin-2.min.js"></script>
    <!-- Vendor JS Files -->

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