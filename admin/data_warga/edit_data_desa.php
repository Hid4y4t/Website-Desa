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
            <h1>Edit Warga Desa</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Edit Warga Desa</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <?php
                        include '../../koneksi/koneksi.php';
                        $id_warga = $_GET['id_warga'];
                        $data = mysqli_query($koneksi, "select * from data_warga_desa where id_warga='$id_warga'");
                        while ($d = mysqli_fetch_array($data)) {
                        ?>
                            <form method="POST" action="proses_edit_warga.php">

                                <div class="row mb-3">
                                   
                                    <label for="inputNumber" class="col-sm-2 col-form-label">NIK</label>
                                    
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="id_warga" value="<?php echo $d['id_warga']; ?>">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">NAMA LENGKAP</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nama_lengkap" value="<?php echo $d['nama_lengkap']; ?>">
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">TEMPAT LAHIR</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="tempat_lahir" value="<?php echo $d['tempat_lahir']; ?>">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">TANGGAL LAHIR</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="tanggal_lahir" value="<?php echo $d['tanggal_lahir']; ?>">
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <legend class="col-form-label col-sm-2 pt-0">JENIS KELAMIN</legend>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="gridRadios1" value="Laki-Laki" checked>
                                            <label class="form-check-label" for="gridRadios1">
                                                LAKI - LAKI
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="gridRadios2" value="Perempuan">
                                            <label class="form-check-label" for="gridRadios2">
                                                PEREMPUAN
                                            </label>
                                        </div>

                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">ALAMAT</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="alamat" value="<?php echo $d['alamat']; ?>">
                                    </div>
                                </div>



                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Agama</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" aria-label="Default select example" name="agama">
                                            <option selected value="<?php echo $d['agama']; ?>"> <?php echo $d['agama']; ?></option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Budha">Budha</option>
                                            <option value="katolik">katolik</option>
                                            <option value="Konghucu">Konghucu</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Pendidikan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="pendidikan" value="<?php echo $d['pendidikan']; ?>">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">STATUS PERKAWINAN</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" name="status_perkawinan" aria-label="Default select example">

                                            <option selected value="<?php echo $d['status_perkawinan']; ?>"> <?php echo $d['status_perkawinan']; ?></option>
                                            <option value="Belum Kawin">Belum Kawin</option>
                                            <option value="Kawin">Kawin</option>
                                            <option value="Cerai Hidup">Cerai Hidup</option>
                                            <option value="Cerai Mati">Cerai Mati</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Kirim Data</label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary"> <i class="bi-check"></i> Kirim</button>
                                        <button class="btn btn-danger"> <a href="../data_warga/data_warga.php" style="color:white ; "> <i class="bi-backspace-fill"></i> Kembali</a></button>
                                    </div>
                                </div>
                            </form><!-- End General Form Elements -->

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