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
    <link href="../assets/img/Kabupaten Seruyan.png" rel="icon">
    <link href="../assets/img/Kabupaten Seruyan.png" rel="apple-touch-icon">

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
                            <span>Admin Desa Ngadiroyo</span>
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
                        <a href="../pengajuan/pengajuan_surat.php">
                            <i class="bi bi-circle"></i><span>Surat</span>
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
                        <a href="../arsip/arsip_surat.php">
                            <i class="bi bi-circle"></i><span>Surat</span>
                        </a>
                    </li>
                    <li>
                        <a href="../arsip/arsip_surat.php">
                            <i class="bi bi-circle"></i><span>Proposal</span>
                        </a>
                    </li>
                    <li>
                        <a href="../arsip/arsip_lain.php">
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
                <a class="nav-link collapsed" href="profile.php">
                    <i class="bi bi-person"></i>
                    <span>Desa</span>
                </a>
            </li><!-- End Profile Page Nav -->

          
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
            <h1>Profile</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>

                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section profile">
            <div class="row">
                <div class="col-xl-4">

                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                            <img src="../assets/img/Kabupaten Seruyan.png" alt="Profile" class="rounded-circle">
                            <?php
                            //koneksi
                            include '../../koneksi/koneksi.php';
                            $no = 1;
                            $data = mysqli_query($koneksi, "select * from profile_desa");
                            while ($d = mysqli_fetch_array($data)) {
                            ?>



                                <h2><?php echo $d['nama_desa']; ?></h2>
                                <h3><?php echo $d['kabupaten']; ?></h3>
                            <?php
                            }
                            ?>
                            <!-- <div class="social-links mt-2">
                                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                            </div> -->
                        </div>
                    </div>

                    <div class="card " style="padding:10px ;">
                        <div class="card-header text-center"> <b>
                                <h4>Informasi Desa</h4>
                            </b></div>

                        <?php
                        //koneksi
                        include '../../koneksi/koneksi.php';
                        $no = 1;
                        $data = mysqli_query($koneksi, "select * from informasi");
                        while ($d = mysqli_fetch_array($data)) {
                        ?>
                            <center><b><?php echo $d['judul']; ?></b></center>
                            <p><?php echo $d['keterangan']; ?></p>



                            <?php
                            $waktu = $d['waktu'];

                            $awal  = date_create("$waktu");
                            $akhir = date_create(); // waktu sekarang
                            $diff  = date_diff($awal, $akhir);



                            echo '  ' . $diff->days, ' Hari yang lalu ';
                            // Output: Total selisih hari: 10398

                            ?>


                        <?php
                        }
                        ?>
                    </div>

                    <div class="card " style="padding: 10px;">



                        <div class="card-header text-center"> <b>
                                <h4>EDIT INFORMASI</h4>
                            </b></div>
                        <?php
                        //koneksi
                        include '../../koneksi/koneksi.php';
                        $no = 1;
                        $data = mysqli_query($koneksi, "select * from informasi");
                        while ($d = mysqli_fetch_array($data)) {
                        ?>

                            <form action="tambah_pengumuman.php" method="post">
                                <label for="fullName" class="col-md-12 col-lg-12 col-form-label">Judul Informasi</label>
                                <input type="hidden" name="id_informasi" value="<?php echo $d['id_informasi']; ?>">

                                <input name="judul" type="text" class="form-control" id="company" value="<?php echo $d['judul']; ?>">
                                <label for="fullName" class="col-md-12 col-lg-12 col-form-label">ISI Informasi</label>


                                <textarea name="keterangan" id="keterangan" rows="10" cols="25">
                                        <?php echo $d['keterangan']; ?>
                                        </textarea>

                                <input type="hidden" name="waktu">

                                <br>
                                <button type="submit" class="btn btn-primary"> <i class="bi-card-text"></i> Simpan</button>
                            </form>
                        <?php
                        }
                        ?>


                    </div>
                </div>

                <div class="col-xl-8">

                    <div class="card">
                        <div class="card-body pt-3">
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered">

                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Profile Desa</button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile Desa</button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Program Kerja</button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Visi Misi</button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-aparatur">Aparatur</button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-bpd">BPD</button>
                                </li>



                            </ul>


                            <div class="tab-content pt-2">

                                <?php
                                //koneksi
                                include '../../koneksi/koneksi.php';

                                $data = mysqli_query($koneksi, "select * from profile_desa");
                                while ($d = mysqli_fetch_array($data)) {
                                ?>


                                    <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                        <h5 class="card-title">SEJARAH DESA</h5>
                                        <p class="small fst-italic" style="text-align:justify ;"><?php echo $d['sejarah_desa']; ?></p>

                                        <h5 class="card-title">Profile Detail Desa</h5>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label ">NAMA DESA</div>
                                            <div class="col-lg-9 col-md-8"><?php echo $d['nama_desa']; ?></div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">KABUPATEN</div>
                                            <div class="col-lg-9 col-md-8"><?php echo $d['kabupaten']; ?></div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">KODE POS</div>
                                            <div class="col-lg-9 col-md-8"><?php echo $d['kode_pos']; ?></div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">ALAMAT KANTOR</div>
                                            <div class="col-lg-9 col-md-8"><?php echo $d['alamat_kantor']; ?></div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">NOMOR TELPON</div>
                                            <div class="col-lg-9 col-md-8"><?php echo $d['telp']; ?></div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">EMAIL</div>
                                            <div class="col-lg-9 col-md-8"><?php echo $d['email']; ?></div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">KODE WILAYAH</div>
                                            <div class="col-lg-9 col-md-8"><?php echo $d['kd_wil']; ?></div>
                                        </div>

                                    </div>
                                <?php
                                }
                                ?>


                                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                                    <?php
                                    //koneksi
                                    include '../../koneksi/koneksi.php';

                                    $data = mysqli_query($koneksi, "select * from profile_desa");
                                    while ($d = mysqli_fetch_array($data)) {
                                    ?>
                                        <!-- Profile Edit Form -->
                                        <form method="POST" action="proses_profile.php">


                                            <div class="row mb-3">
                                                <input type="hidden" name="id_desa" value="<?php echo $d['id_desa']; ?>">
                                                <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nama Desa</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="nama_desa" type="text" class="form-control" id="fullName" value="<?php echo $d['nama_desa']; ?>">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="about" class="col-md-4 col-lg-3 col-form-label">Kabupaten</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="kabupaten" type="text" class="form-control" id="company" value="<?php echo $d['kabupaten']; ?>">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="company" class="col-md-4 col-lg-3 col-form-label">Kode Pos</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="kode_pos" type="text" class="form-control" id="company" value="<?php echo $d['kode_pos']; ?>">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="Job" class="col-md-4 col-lg-3 col-form-label">Alamat Kantor</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="alamat_kantor" type="text" class="form-control" id="Job" value="<?php echo $d['alamat_kantor']; ?>">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="Country" class="col-md-4 col-lg-3 col-form-label">Nomor Telpon</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="telp" type="text" class="form-control" id="Country" value="<?php echo $d['telp']; ?>">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="Address" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="email" type="email" class="form-control" id="Address" value="<?php echo $d['email']; ?>">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Kode Wilayah</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="kd_wil" type="text" class="form-control" id="Phone" value="<?php echo $d['kd_wil']; ?>">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="Email" class="col-md-4 col-lg-3 col-form-label">Sejarah Desa</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <textarea name="sejarah_desa" class="form-control" id="about" style="height: 100px"><?php echo $d['sejarah_desa']; ?></textarea>
                                                </div>
                                            </div>



                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary"> <i class="bi-card-text"></i> Simpan</button>
                                            </div>
                                        </form><!-- End Profile Edit Form -->
                                    <?php
                                    }
                                    ?>
                                </div>


                                <div class="tab-pane fade pt-3" id="profile-settings">
                                    <div class="row mb-3">
                                        <!-- ====== -->

                                        <!-- ====== -->
                                        <div class="col-md-12 col-lg-12">
                                            <div class="table-responsive">

                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>

                                                            <th scope="col">Program Kerja </th>

                                                            <th scope="col">Opsi</th>

                                                        </tr>
                                                    </thead>


                                                    <tbody>
                                                        <?php
                                                        //koneksi
                                                        include '../../koneksi/koneksi.php';
                                                        $no = 1;
                                                        $data = mysqli_query($koneksi, "select * from program_kerja");
                                                        while ($d = mysqli_fetch_array($data)) {
                                                        ?>
                                                            <tr>



                                                                <td><?php echo $d['program_kerja']; ?></td>



                                                                <td>

                                                                    <a href="#" onClick="confirm_modal('hapus_program.php?id_program=<?php echo $d['id_program']; ?>');"><button type="button" class="btn btn-outline-danger">Hapus</button></a>
                                                                </td>

                                                            </tr>
                                                        <?php
                                                        }
                                                        ?>


                                                    </tbody>
                                                </table>


                                            </div>
                                            <div class="tab-pane mb-3">
                                                <div class="text-center">
                                                    <h3>Tambah Program Kerja</h3>
                                                </div>

                                                <form method="POST" action="tambah_program_kerja.php">
                                                    <div class="row mb-3">

                                                        <div class="col-md-12 col-lg-12">
                                                            <input name="program_kerja" type="text" class="form-control" id="program_kerja">
                                                        </div>
                                                    </div>

                                                    <div class="text-center">
                                                        <button type="submit" class="btn btn-primary"> <i class="bi-card-text"></i> Simpan</button>
                                                    </div>
                                                </form>
                                            </div>


                                        </div>
                                    </div>



                                </div>



                                <div class="tab-pane fade pt-3" id="profile-change-password">
                                    <!-- Change Password Form -->

                                    <div class="visi_misi">

                                        <?php
                                        //koneksi
                                        include '../../koneksi/koneksi.php';
                                        $no = 1;
                                        $data = mysqli_query($koneksi, "select * from visi_misi");
                                        while ($d = mysqli_fetch_array($data)) {
                                        ?>
                                            <label for="currentPassword" class="col-md-12 col-lg-12 col-form-label">
                                                <center>
                                                    <h4>Visi</h4> <br>
                                                    <p> <?php echo $d['visi']; ?></p>
                                                </center>

                                                <center>
                                                    <h4>Misi</h4>
                                                </center>

                                                <p> <?php echo $d['misi']; ?></p>
                                            </label>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <br>
                                    <hr>
                                    <hr><br>
                                    <?php
                                    //koneksi
                                    include '../../koneksi/koneksi.php';
                                    $no = 1;
                                    $data = mysqli_query($koneksi, "select * from visi_misi");
                                    while ($d = mysqli_fetch_array($data)) {
                                    ?>
                                        <form method="POST" action="tambah_vm.php">
                                            <div class="text-center">
                                                <label for="currentPassword" class="col-md-12 col-lg-12 col-form-label">
                                                    <h3>Edit Visi Misi</h3>
                                                </label>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="currentPassword" class="col-md-12 col-lg-12 col-form-label">
                                                    VISI
                                                </label>
                                                <div class="col-md-12 col-lg-12 ">
                                                    <input type="hidden" name="id_vs" value="<?php echo $d['id_vs']; ?>">
                                                    <input name="visi" type="text" class="form-control" id="newPassword" value="<?php echo $d['visi']; ?>">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="currentPassword" class="col-md-12 col-lg-12 col-form-label">
                                                    MISI
                                                </label>
                                                <div class="col-md-12 col-lg-12">



                                                    <textarea class="tinymce-editor" name="misi" id="misi">
                                                    <?php echo $d['misi']; ?>
                                                    </textarea>

                                                </div>
                                            </div>


                                            <br>


                                            <div class="text-center mt-2">
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </form><!-- End Change Password Form -->
                                    <?php
                                    }
                                    ?>
                                </div>


                                <div class="tab-pane fade pt-3" id="profile-change-aparatur">
                                    <!-- Change Password Form -->

                                    <div>

                                        <div class="table-responsive">
                                            <h4>Aparatur Desa</h4>
                                            <table class="table">
                                                <thead>
                                                    <th>Nama</th>
                                                    <th>Jabatan</th>
                                                    <th></th>
                                                </thead>

                                                <?php
                                                //koneksi
                                                include '../../koneksi/koneksi.php';
                                                $no = 1;
                                                $data = mysqli_query($koneksi, "select * from aparatur_desa");
                                                while ($d = mysqli_fetch_array($data)) {
                                                ?>
                                                    <tr>
                                                        <td>
                                                            <?php echo $d['nama']; ?>
                                                        </td>
                                                        <td><?php echo $d['jabatan']; ?></td>
                                                       <td> <a href="#" onClick="confirm_modal('hapus_aparatur.php?id=<?php echo $d['id']; ?>');"><button type="button" class="btn btn-outline-danger">Hapus</button></a></td>
                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            </table>
                                        </div>


                                    </div>

                                    <!-- form -->

                                    <form action="tambah_aparatur.php" method="post" enctype="multipart/form-data">
                                        <div class="row mb-3">
                                            <label for="inputText" class="col-sm-2 col-form-label">NAMA</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="nama">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="inputText" class="col-sm-2 col-form-label">JABATAN</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="jabatan">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="inputNumber" class="col-sm-2 col-form-label">FOTO</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="foto" type="file" id="formFile">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">KIRIM ARTIKEL</label>
                                            <div class="col-sm-10">
                                                <a href=""> <button type="submit" class="btn btn-primary"> <i class="bi-check"></i> Kirim</button></a>
                                                <button class="btn btn-danger"> <a href="../index.php" style="color:white ; "> <i class="bi-backspace-fill"></i> Kembali</a></button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- end form -->


                                </div>


                                <div class="tab-pane fade pt-3" id="profile-change-bpd">
                                    <!-- Change Password Form -->

                                    <div>


                                        <div class="table-responsive">
                                            <h4>BPD</h4>
                                            <table class="table">
                                                <thead>
                                                    <th>Nama</th>
                                                    <th>Jabatan</th>
                                                    <th></th>
                                                </thead>
                                                <?php
                                                //koneksi
                                                include '../../koneksi/koneksi.php';
                                                $no = 1;
                                                $data = mysqli_query($koneksi, "select * from bpd");
                                                while ($d = mysqli_fetch_array($data)) {
                                                ?>
                                                    <tr>
                                                        <td>
                                                            <?php echo $d['nama']; ?>
                                                        </td>
                                                        <td><?php echo $d['jabatan']; ?></td>
                                                      <td>  <a href="#" onClick="confirm_modal('hapus_aparatur.php?id=<?php echo $d['id']; ?>');"><button type="button" class="btn btn-outline-danger">Hapus</button></a></td>
                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            </table>
                                        </div>






                                    </div>

                                    <br>

                                    <!-- form -->

                                    <form action="tambah_bpd.php" method="post" enctype="multipart/form-data">
                                        <div class="row mb-3">
                                            <label for="inputText" class="col-sm-2 col-form-label">NAMA</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="nama">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="inputText" class="col-sm-2 col-form-label">JABATAN</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="jabatan">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="inputNumber" class="col-sm-2 col-form-label">FOTO</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="foto" type="file" id="formFile">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">KIRIM ARTIKEL</label>
                                            <div class="col-sm-10">
                                                <a href=""> <button type="submit" class="btn btn-primary"> <i class="bi-check"></i> Kirim</button></a>
                                                <button class="btn btn-danger"> <a href="../index.php" style="color:white ; "> <i class="bi-backspace-fill"></i> Kembali</a></button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- end form -->


                                </div>

                            </div><!-- End Bordered Tabs -->

                        </div>
                    </div>

                </div>
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
        $(document).ready(function() {
            $('#table_4').DataTable();
        });
        $(document).ready(function() {
            $('#table_5').DataTable();
        });
        $(document).ready(function() {
            $('#table_6').DataTable();
        });
        $(document).ready(function() {
            $('#table_7').DataTable();
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





<