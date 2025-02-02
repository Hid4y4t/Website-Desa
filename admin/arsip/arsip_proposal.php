<?php
session_start();
if (!isset($_SESSION["username"])) {
    echo "
 <script>alert('ANDA HARUS LOGIN TERLEBIH DAHULU'); window.location.href='../../login/index.php'</script>";
    exit;
}
$id = $_SESSION["id"];
$username = $_SESSION["username"];
$nama = $_SESSION["nama"];
?>

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
                <span class="d-none d-lg-block">Banua Usang</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->
        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="../assets/img/admin.png" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Admin</h6>
                            <span>Admin Desa Banua Usang</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                       
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="../logout.php">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->
    </header><!-- End Header -->




    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item">
                <a class="nav-link " href="../index.php">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-pengajuan" data-bs-toggle="collapse" href="#">
                    <i class="bi bx-package"></i><span>PELAYANAN</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-pengajuan" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="../pengajuan/aduan.php">
                            <i class="bi bi-circle"></i><span>Aduan</span>
                        </a>
                    </li>
                    <li>
                        <a href="../pengajuan/masukan.php">
                            <i class="bi bi-circle"></i><span>Masukan</span>
                        </a>
                    </li>
                    <li>
                        <a href="../pengajuan/pengajuan_proposal.php">
                            <i class="bi bi-circle"></i><span>Proposal</span>
                        </a>
                    </li>
                   
                </ul>
            </li><!-- End Components Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-menu-button-wide"></i><span>DATA WARGA</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="../data_warga/data_warga.php">
                            <i class="bi bi-circle"></i><span>WARGA</span>
                        </a>
                    </li>
                    <li>
                        <a href="../data_warga/warga_tidak_mampu.php">
                            <i class="bi bi-circle"></i><span>WARGA TIDAK MAMPU</span>
                        </a>
                    </li>
                   
                </ul>
            </li><!-- End Components Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-journal-text"></i><span>Fasilitas</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="../fasilitas/fasilitas_desa.php">
                            <i class="bi bi-circle"></i><span>Fasilitas Desa</span>
                        </a>
                    </li>
                    <li>
                        <a href="../fasilitas/rencana_pembangunan.php">
                            <i class="bi bi-circle"></i><span>Rencana Pembangunan</span>
                        </a>
                    </li>
                    
                </ul>
            </li><!-- End Forms Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-layout-text-window-reverse"></i><span>Kabar Desa</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="../kabar_desa/artikel_desa.php">
                            <i class="bi bi-circle"></i><span>Artikel Desa</span>
                        </a>
                    </li>
                    <li>
                        <a href="../kabar_desa/galeri_desa.php">
                            <i class="bi bi-circle"></i><span>Galeri Desa</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Tables Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-bar-chart"></i><span>Arsip Berkas Desa</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="arsip_surat.php">
                            <i class="bi bi-circle"></i><span>Surat</span>
                        </a>
                    </li>
                    <li>
                        <a href="arsip_proposal.php">
                            <i class="bi bi-circle"></i><span>Proposal</span>
                        </a>
                    </li>
                    <li>
                        <a href="arsip_lain.php">
                            <i class="bi bi-circle"></i><span>Berkas Lain-Lain</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Charts Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-gem"></i><span>Arsip Kegiatan</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                    <a href="../arsip_kegiatan/arsip_kegiatan.php">
                            <i class="bi bi-circle"></i><span>Arsip Kegiatan</span>
                        </a>
                    </li>
                    
                </ul>
            </li><!-- End Icons Nav -->

            <li class="nav-heading">Pages</li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="../profile/profile.php">
                    <i class="bi bi-person"></i>
                    <span>Profile Desa</span>
                </a>
            </li><!-- End Profile Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="../surat/surat.php">
                    <i class="bi bi-file-earmark"></i>
                    <span>Surat</span>
                </a>
            </li><!-- End Blank Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="../logout.php">
                    <i class="bi bi-box-arrow-in-right"></i>
                    <span>Logout</span>
                </a>
            </li><!-- End Login Page Nav -->

          
           
        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Arsip Proposal</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Arsip Proposal</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->



        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">

                        <!-- Sales Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card">



                                <div class="card-body">
                                    <h5 class="card-title">Jumlah proposal Masuk <span>| Banua Usang</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-shield"></i>
                                        </div>
                                        <div class="ps-3">
                                            <?php include '../../koneksi/koneksi.php';

                                            // mengambil data barang
                                            $data_masuk = mysqli_query($koneksi, "SELECT * FROM arsip_proposal_masuk");

                                            // menghitung data barang
                                            $jumlah_masuk = mysqli_num_rows($data_masuk);
                                            ?>
                                            <div class="ps-3">
                                                <h6><?php echo $jumlah_masuk; ?> Proposal</h6>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Sales Card -->

                        <!-- Revenue Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card revenue-card">


                                <div class="card-body">
                                    <h5 class="card-title"> Jumlah Proposal Keluar <span>| Banua Usang</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-shield"></i>
                                        </div>
                                        <div class="ps-3">
                                            <?php include '../../koneksi/koneksi.php';

                                            // mengambil data barang
                                            $data_keluar = mysqli_query($koneksi, "SELECT * FROM arsip_proposal_keluar");

                                            // menghitung data barang
                                            $jumlah_keluar = mysqli_num_rows($data_keluar);
                                            ?>
                                            <div class="ps-3">
                                                <h6><?php echo $jumlah_keluar; ?> Proposal</h6>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Revenue Card -->
                        <div class="col-12">
                            <div class="card">
                                <h5 class="card-title">
                                    <center>
                                        <h3> Arsip Proposal<br> DESA BANUA USANG</h3>
                                    </center>
                                </h5>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <center>
                                        <h3><b> Proposal Masuk</b></h3>
                                    </center>
                                    <div class="icon">
                                        <a href="tambah_proposal_masuk.php"> <button type="button" class="btn btn-outline-primary"> <i class="ri-add-circle-fill">Tambah Arsip Proposal Masuk</i></button></a>
                                    </div>
                                </h5>
                                <!-- Table with hoverable rows -->
                                <div class="table-responsive">
                                    <table class="table table-hover" id="table_id">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Keterangan</th>
                                                <th scope="col">Tanggal</th>

                                                <th scope="col">Opsi</th>

                                            </tr>
                                        </thead>

                                        <tfoot>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Keterangan</th>
                                                <th scope="col">Tanggal</th>

                                                <th scope="col">Opsi</th>

                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                            //koneksi
                                            include '../../koneksi/koneksi.php';
                                            $no = 1;
                                            $data = mysqli_query($koneksi, "select * from arsip_proposal_masuk");
                                            while ($d = mysqli_fetch_array($data)) {
                                            ?>
                                                <tr>


                                                    <td><?php echo $no++; ?></td>
                                                    <td><?php echo $d['keterangan']; ?></td>


                                                    <td><?php echo $d['tanggal']; ?></td>


                                                    <td>
                                                        <a href="view_proposal_masuk.php?id_arsip_proposal_masuk=<?php echo $d['id_arsip_proposal_masuk']; ?>"><button type="button" class="btn btn-outline-primary">Lihat</button></a>
                                                        <a href="#" onClick="confirm_modal('proses/hapus_proposal_masuk.php?id_arsip_proposal_masuk=<?php echo $d['id_arsip_proposal_masuk']; ?>');"><button type="button" class="btn btn-outline-danger">Hapus</button></a>
                                                    </td>

                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- End Table with hoverable rows -->

                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <center>
                                        <h3><b> Proposal Keluar</b></h3>
                                    </center>
                                    <div class="icon">
                                        <button type="button" class="btn btn-outline-primary"> <i class="ri-add-circle-fill">Tambah Arsip Surat Keluar</i></button>
                                    </div>
                                </h5>
                                <!-- Table with hoverable rows -->
                                <div class="table-responsive">
                                    <table class="table table-hover" id="table_2">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Keterangan</th>

                                                <th scope="col">Tanggal</th>
                                                <th scope="col">Opsi</th>
                                            </tr>
                                        </thead>

                                        <tfoot>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Keterangan</th>

                                                <th scope="col">Tanggal</th>
                                                <th scope="col">Opsi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                            //koneksi
                                            include '../../koneksi/koneksi.php';
                                            $no = 1;
                                            $data = mysqli_query($koneksi, "select * from arsip_proposal_keluar");
                                            while ($d = mysqli_fetch_array($data)) {
                                            ?>
                                                <tr>


                                                    <td><?php echo $no++; ?></td>
                                                    <td><?php echo $d['keterangan']; ?></td>


                                                    <td><?php echo $d['tanggal']; ?></td>


                                                    <td>
                                                        <a href="view_proposal_keluar.php?id_proposal_keluar=<?php echo $d['id_proposal_keluar']; ?>"><button type="button" class="btn btn-outline-primary">Lihat</button></a>
                                                        <a href="#" onClick="confirm_modal('proses/hapus_proposal_keluar.php?id_proposal_keluar=<?php echo $d['id_proposal_keluar']; ?>');"><button type="button" class="btn btn-outline-danger">Hapus</button></a>
                                                    </td>

                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- End Table with hoverable rows -->

                            </div>
                        </div>


                    </div><!-- End Top Selling -->

                </div>
            </div><!-- End Left side columns -->

            <!-- Right side columns -->

            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>Desa Ngadiroyo</span></strong>. All Rights Reserved
        </div>

    </footer><!-- End Footer -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <div class="modal fade" id="modal_delete">
        <div class="modal-dialog">

            <div class="modal-content" style="margin-top:100px;">
                <div class="modal-header">

                    <h4 class="modal-title" style="text-align:center;">Anda yakin akan menghapus data ini.. ?</h4>
                </div>

                <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
                    <a href="#" class="btn btn-danger btn-sm" id="delete_link">Hapus</a>
                    <button type="submit" value="Reload" onClick="document.location.reload(true)" class="btn btn-success btn-sm" data-dismiss="modal">Cancel</button>

                </div>
            </div>
        </div>
    </div>

    <!-- Javascript untuk popup modal Delete-->
    <script type="text/javascript">
        function confirm_modal(delete_url) {
            $('#modal_delete').modal('show', {
                backdrop: 'static'
            });
            document.getElementById('delete_link').setAttribute('href', delete_url);
        }

        function reloadpage() {
            location.reload()
        }
    </script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- jquery datatable -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#table_id').DataTable();
        });

        $(document).ready(function() {
            $('#table_2').DataTable();
        });
        $(document).ready(function() {
            $('#table_3').DataTable();
        });
    </script>


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