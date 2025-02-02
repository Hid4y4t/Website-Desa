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
    <link href="../assets/css/laporan.css" rel="stylesheet">

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
                    <!-- <li><a class="nav-link scrollto active" href="../laporan/index.php">Laporan APBD</a></li> -->

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
            <h1>Data Laporan APBD</h1>
            <h2>DESA Ngadiroyo</h2>
            <!-- <a href="#about" class="btn-get-started scrollto">Get Started</a> -->
        </div>
    </section><!-- End Hero -->
    <br><br>








    <!-- End of Main Content -->


    <div class="container">

        <!-- Page Heading -->

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">PENDAPATAN</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover" id="table_id">
                        <thead>
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">Pendapatan</th>
                                <th scope="col">Anggaran</th>
                                <th scope="col">Realisasi</th>
                                <th>Lebih Kurang</th>


                            </tr>
                        </thead>

                        <tfoot>



                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Jumlah</th>


                                <?php
                                include '../koneksi/koneksi.php';
                                $sql3 = mysqli_query($koneksi, "SELECT SUM(anggaran)FROM pendapatan_desa");

                                while ($data3 = mysqli_fetch_array($sql3)) {
                                ?>
                                    <td><b><?php echo "Rp." . number_format($data3['SUM(anggaran)']); ?></b></td>
                                <?php
                                }
                                ?>


                                <?php
                                include '../koneksi/koneksi.php';
                                $sql3 = mysqli_query($koneksi, "SELECT SUM(realisasi)FROM pendapatan_desa");
                                while ($data3 = mysqli_fetch_array($sql3)) {
                                ?>
                                    <td><b><?php echo "Rp." . number_format($data3['SUM(realisasi)']); ?></b></td>
                                <?php
                                }
                                ?>

                                <th>
                                </th>

                            </tr>

                        </tfoot>

                        <tbody>
                            <?php
                            //koneksi
                            include '../koneksi/koneksi.php';
                            $no = 1;
                            $data = mysqli_query($koneksi, "select * from pendapatan_desa");
                            while ($d = mysqli_fetch_array($data)) {
                            ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td> <?php echo $d['pendapatan']; ?></td>
                                    <td> Rp.<?php echo $d['anggaran']; ?></td>
                                    <td> Rp.<?php echo $d['realisasi']; ?></td>
                                    <td><b>Rp. <?php $pengurangan = $d['anggaran'] - $d['realisasi'];
                                                echo "$pengurangan"; ?></b></td>




                                </tr>
                            <?php
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>


            <!-- ===================================== -->
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">BELANJA</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover" id="table_2">
                        <thead>
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">Belanja</th>
                                <th scope="col">Anggaran</th>
                                <th scope="col">Realisasi</th>
                                <th>Lebih Kurang</th>

                            </tr>
                        </thead>

                        <tfoot>



                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Jumlah</th>


                                <?php
                                include '../koneksi/koneksi.php';
                                $sql3 = mysqli_query($koneksi, "SELECT SUM(anggaran)FROM belanja_desa");

                                while ($data3 = mysqli_fetch_array($sql3)) {
                                ?>
                                    <td><b><?php echo "Rp." . number_format($data3['SUM(anggaran)']); ?></b></td>
                                <?php
                                }
                                ?>


                                <?php
                                include '../koneksi/koneksi.php';
                                $sql3 = mysqli_query($koneksi, "SELECT SUM(realisasi)FROM belanja_desa");
                                while ($data3 = mysqli_fetch_array($sql3)) {
                                ?>
                                    <td><b><?php echo "Rp." . number_format($data3['SUM(realisasi)']); ?></b></td>
                                <?php
                                }
                                ?>

                                <th>
                                </th>

                            </tr>

                        </tfoot>

                        <tbody>
                            <?php
                            //koneksi
                            include '../koneksi/koneksi.php';
                            $no = 1;
                            $data = mysqli_query($koneksi, "select * from belanja_desa");
                            while ($d = mysqli_fetch_array($data)) {
                            ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td> <?php echo $d['belanja']; ?></td>
                                    <td> Rp.<?php echo $d['anggaran']; ?></td>
                                    <td> Rp.<?php echo $d['realisasi']; ?></td>
                                    
                                    <td><b>Rp. <?php $pengurangan = $d['anggaran'] - $d['realisasi'];
                                                echo "$pengurangan"; ?></b></td>


                                </tr>
                                </td>

                            <?php
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">BIAYA</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover" id="table_3">
                        <thead>
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">Biaya</th>
                                <th scope="col">Anggaran</th>
                                <th scope="col">Realisasi</th>
                                <th>Lebih Kurang</th>


                            </tr>
                        </thead>

                        <tfoot>



                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Jumlah</th>


                                <?php
                                include '../koneksi/koneksi.php';
                                $sql3 = mysqli_query($koneksi, "SELECT SUM(anggaran)FROM pembiayaan_desa");

                                while ($data3 = mysqli_fetch_array($sql3)) {
                                ?>
                                    <td><b><?php echo "Rp." . number_format($data3['SUM(anggaran)']); ?></b></td>
                                <?php
                                }
                                ?>


                                <?php
                                include '../koneksi/koneksi.php';
                                $sql3 = mysqli_query($koneksi, "SELECT SUM(realisasi)FROM pembiayaan_desa");
                                while ($data3 = mysqli_fetch_array($sql3)) {
                                ?>
                                    <td><b><?php echo "Rp." . number_format($data3['SUM(realisasi)']); ?></b></td>
                                <?php
                                }
                                ?>

                                <th>
                                </th>

                            </tr>

                        </tfoot>

                        <tbody>
                            <?php
                            //koneksi
                            include '../koneksi/koneksi.php';
                            $no = 1;
                            $data = mysqli_query($koneksi, "select * from pembiayaan_desa");
                            while ($d = mysqli_fetch_array($data)) {
                            ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td> <?php echo $d['pembiayaan']; ?></td>
                                    <td> Rp.<?php echo $d['anggaran']; ?></td>
                                    <td> Rp.<?php echo $d['realisasi']; ?></td>
                                    <td><b>Rp. <?php $pengurangan = $d['anggaran'] - $d['realisasi'];
                                                echo "$pengurangan"; ?></b></td>


                                </tr>
                            <?php
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>


            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Rincian Penggunaan Dana Desa</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Jenis</th>
                                <th scope="col">Biaya </th>
                            </tr>
                        </thead>
                        <tfoot>
                            <th scope="col"></th>
                            <th scope="col">Total</th>
                            <?php
                            include '../koneksi/koneksi.php';
                            $sql3 = mysqli_query($koneksi, "SELECT SUM(dana)FROM penggunaan_dana_desa");
                            while ($data3 = mysqli_fetch_array($sql3)) {
                            ?>
                                <td><b><?php echo "Rp." . number_format($data3['SUM(dana)']); ?></b></td>
                            <?php
                            }
                            ?>

                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                            //koneksi
                            include '../koneksi/koneksi.php';
                            $no = 1;
                            $data = mysqli_query($koneksi, "select * from penggunaan_dana_desa");
                            while ($d = mysqli_fetch_array($data)) {
                            ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td> <?php echo $d['penggunaan']; ?></td>
                                    <td> Rp.<?php echo $d['dana']; ?></td>


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