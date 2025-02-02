<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>ADMIN</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">

    <!-- jquery -->
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between">
            <a href="../index.php" class="logo d-flex align-items-center">
                <img src="../assets/img/Kabupaten Seruyan.png" alt="">
                <span class="d-none d-lg-block">Ngadiroyo</span>
            </a>

        </div><!-- End Logo -->
        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="../assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Admin</h6>
                            <span>Admin Desa Ngadiroyo</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>


                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->
    </header><!-- End Header -->






    <div class="container">

        <br><br>
        <div class="pagetitle mt-5">
            <h1>DETAIL DATA WARGA PINDAH</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#l">Home</a></li>
                    <li class="breadcrumb-item active">DETAIL DATA WARGA PINDAH</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <div class="row">
            <div class="col-md-12">
                <div class="card p-5">
                    <?php
                    include '../../koneksi/koneksi.php';
                    $id_pindah = $_GET['id_pindah'];
                    $data = mysqli_query($koneksi, "select * from data_pindah where id_pindah='$id_pindah'");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <table class="table caption-top">
                            <button class="btn btn-primary"> <a href="data_warga.php" style="color:white ; "> <i class="bi-backspace-fill"></i> Kembali</a></button>
                            <caption>DETAIL DATA WARGA PINDAH</caption>

                            <tbody>
                                <tr>

                                    <td style="width:20% ;">NIK</td>
                                    <td>: <?php echo $d['nik']; ?></td>
                                </tr>
                                <tr>
                                    <td>NAMA LENGKAP</td>
                                    <td>: <?php echo $d['nama']; ?></td>
                                </tr>

                                <tr>
                                    <td>TEMPAT LAHIR</td>
                                    <td>: <?php echo $d['tempat_lahir']; ?></td>
                                </tr>

                                <tr>
                                    <td>TANGGAL LAHIR</td>
                                    <td>: <?php echo $d['tanggal_lahir']; ?></td>
                                </tr>

                                <tr>
                                    <td>JENIS KELAMIN</td>
                                    <td>: <?php echo $d['jenis_kelamin']; ?></td>
                                </tr>
                                <tr>
                                    <td>AGAMA</td>
                                    <td>: <?php echo $d['agama']; ?></td>
                                </tr>
                                <tr>
                                    <td>PENDIDIKAN</td>
                                    <td>: <?php echo $d['pendidikan']; ?></td>
                                </tr>

                                <tr>

                                    <td>ALAMAT ASAL</td>
                                    <td>: <?php echo $d['alamat_asal']; ?></td>
                                </tr>
                                <tr>

                                    <td>ALAMAT BARU</td>
                                    <td>: <?php echo $d['alamat_baru']; ?></td>
                                </tr>
                                <tr>

                                    <td>TANGGAL PINDAH</td>
                                    <td>: <?php echo $d['tanggal_pindah']; ?></td>
                                </tr>
                                

                            </tbody>
                        </table>
                    <?php
                    }
                    ?>
                </div>

            </div>

        </div>
    </div>

    </div>


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


    <!-- jquery datatable -->


    <!-- Vendor JS Files -->
    <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/chart.js/chart.min.js"></script>
    <script src="../assets/vendor/echarts/echarts.min.js"></script>
    <script src="../assets/vendor/quill/quill.min.js"></script>
    <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>

</body>

</html>