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


<?php
include('../../koneksi/koneksi.php');
$judul_galeri =  $foto01 = $foto02 = $foto03 = $foto04 = $foto05 = "";
$judul_galeri_err =  $foto01_err = $foto02_err =  $foto03_err = $foto04_err = $foto05_err = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (
        empty(trim($_POST['judul_galeri']))


    ) {
        $judul_galeri_err = "Nama  harap diisi";
    } else {
        $judul_galeri = $_POST['judul_galeri'];


        $judul_galeri  = mysqli_real_escape_string($koneksi, $judul_galeri);
    }

    //validasi foto 1
    $imgFile = $_FILES['foto01']['name'];
    $tmp_dir = $_FILES['foto01']['tmp_name'];
    $imgSize = $_FILES['foto01']['size'];
    $upload_dir = '../../kabar_desa/foto/';
    $imgExt = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION));
    $valid_extensions = array('jpeg', 'jpg', 'png', 'gif');
    $itempic = rand(1000, 1000000) . "." . $imgExt; //rename secara random
    //cek data
    if (!empty($_FILES["foto01"]["tmp_name"])) {
        //cek ektensi
        if (in_array($imgExt, $valid_extensions)) {
            //cek besar       
            if (!$imgSize < 2000000) {
                //jika benar upload gambar ke direktori
                $foto01 = move_uploaded_file($tmp_dir, $upload_dir . $itempic);
            } else {
                $foto01_err = "Maaf file foto terlalu besar";
            }
        } else {
            $foto01_err = "Maaf Ektensi Foto tidak sesuai";
        }
    } else {
        $foto01_err = "Maaf Anda belum memilih foto ";
    }


    //validasi foto 2
    $imgFile = $_FILES['foto02']['name'];
    $tmp_dir = $_FILES['foto02']['tmp_name'];
    $imgSize = $_FILES['foto02']['size'];
    $upload_dir = '../../kabar_desa/foto/';
    $imgExt = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION));
    $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); //cek valif ektensi
    $itempic2 = rand(1000, 1000000) . "." . $imgExt; //rename secara random
    //cek data
    if (!empty($_FILES["foto02"]["tmp_name"])) {
        //cek ektensi
        if (in_array($imgExt, $valid_extensions)) {
            //cek besar       
            if (!$imgSize < 2000000) {
                //jika benar upload gambar ke direktori
                $foto02 = move_uploaded_file($tmp_dir, $upload_dir . $itempic2);
            } else {
                $foto02_err = "Maaf file foto terlalu besar";
            }
        } else {
            $foto02_err = "Maaf Ektensi Foto tidak sesuai";
        }
    } else {
        $foto02_err = "Maaf Anda belum memilih foto ";
    }





    //validasi foto 3
    $imgFile = $_FILES['foto03']['name'];
    $tmp_dir = $_FILES['foto03']['tmp_name'];
    $imgSize = $_FILES['foto03']['size'];
    $upload_dir = '../../kabar_desa/foto/';
    $imgExt = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION));
    $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); //cek valif ektensi
    $itempic3 = rand(1000, 1000000) . "." . $imgExt; //rename secara random
    //cek data
    if (!empty($_FILES["foto03"]["tmp_name"])) {
        //cek ektensi
        if (in_array($imgExt, $valid_extensions)) {
            //cek besar       
            if (!$imgSize < 2000000) {
                //jika benar upload gambar ke direktori
                $foto03 = move_uploaded_file($tmp_dir, $upload_dir . $itempic3);
            } else {
                $foto03_err = "Maaf file foto terlalu besar";
            }
        } else {
            $foto03_err = "Maaf Ektensi Foto tidak sesuai";
        }
    } else {
        $foto03_err = "Maaf Anda belum memilih foto ";
    }



    //validasi foto 4
    $imgFile = $_FILES['foto04']['name'];
    $tmp_dir = $_FILES['foto04']['tmp_name'];
    $imgSize = $_FILES['foto04']['size'];
    $upload_dir = '../../kabar_desa/foto/';
    $imgExt = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION));
    $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); //cek valif ektensi
    $itempic4 = rand(1000, 1000000) . "." . $imgExt; //rename secara random
    //cek data
    if (!empty($_FILES["foto04"]["tmp_name"])) {
        //cek ektensi
        if (in_array($imgExt, $valid_extensions)) {
            //cek besar       
            if (!$imgSize < 2000000) {
                //jika benar upload gambar ke direktori
                $foto04 = move_uploaded_file($tmp_dir, $upload_dir . $itempic4);
            } else {
                $foto04_err = "Maaf file foto terlalu besar";
            }
        } else {
            $foto04_err = "Maaf Ektensi Foto tidak sesuai";
        }
    } else {
        $foto04_err = "Maaf Anda belum memilih foto ";
    }



    //validasi foto 5
    $imgFile = $_FILES['foto05']['name'];
    $tmp_dir = $_FILES['foto05']['tmp_name'];
    $imgSize = $_FILES['foto05']['size'];
    $upload_dir = '../../kabar_desa/foto/';
    $imgExt = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION));
    $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); //cek valif ektensi
    $itempic5 = rand(1000, 1000000) . "." . $imgExt; //rename secara random
    //cek data
    if (!empty($_FILES["foto05"]["tmp_name"])) {
        //cek ektensi
        if (in_array($imgExt, $valid_extensions)) {
            //cek besar       
            if (!$imgSize < 2000000) {
                //jika benar upload gambar ke direktori
                $foto05 = move_uploaded_file($tmp_dir, $upload_dir . $itempic5);
            } else {
                $foto05_err = "Maaf file foto terlalu besar";
            }
        } else {
            $foto05_err = "Maaf Ektensi Foto tidak sesuai";
        }
    } else {
        $foto05_err = "Maaf Anda belum memilih foto ";
    }




    // cek semua data apakah ada yang error atau tidak bila tidak proses lanjutkan
    if (empty($judul_galeri_err)  && empty($foto01_err)) {
        //foto di upload jika semua sudah selesai di validasi
        echo "$foto01 $foto02 $foto03 $foto04 $foto05";  //upload pindahkan file ke server   
        // Prepare an insert statement
        $sql = "INSERT INTO galeri_publik (judul_galeri, foto1, foto2, foto3, foto4, foto5) VALUES ( ?, ?,?,?,?, ?)";
        if ($stmt = mysqli_prepare($koneksi, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssss", $param_judul_galeri, $param_foto1, $param_foto2, $param_foto3, $param_foto4, $param_foto5);
            // Set parameters


            $param_judul_galeri = $judul_galeri;

            $param_foto1 = $itempic;
            $param_foto2 = $itempic2;
            $param_foto3 = $itempic3;
            $param_foto4 = $itempic4;
            $param_foto5 = $itempic5;
            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Redirect 
                echo "Berhasil nyimpan data <img src='../../kabar_desa/foto/$param_foto1' height='60'>";
                echo "<meta http-equiv=\"refresh\"content=\"2;URL=tambah_galeri.php\"/>";
            } else {
                echo "Gagal menyimpan data";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }
    mysqli_close($koneksi);
    //end method post
}
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
<!-- <a href="../../kabar_desa/foto/"></a> -->

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
            <h1>Tambah Galeri Kegiatan Desa</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Tambah Galeri</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"></h5>

                        <form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Jenis Galeri</label>
                                <div class="col-sm-10">
                                    <select class="form-select" aria-label="Default select example" name="judul_galeri" required>
                                        <option selected>Pilih Jenis Galeri</option>
                                        <option value="kegiatan">Kegiatan Desa</option>
                                        <option value="fasilitas">Fasilitas Desa</option>
                                        <option value="produk">Produk Desa</option>
                                    </select>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Foto</label>
                                <div class="col-md-2">
                                    <label for="validationDefault01" class="form-label">FOTO 1</label>
                                    <input type="file" class="form-control" id="foto01" name="foto01">
                                </div>
                                <div class="col-md-2">
                                    <label for="validationDefault02" class="form-label">FOTO 2</label>
                                    <input type="file" class="form-control" id="foto02" name="foto02">
                                </div>
                                <div class="col-md-2">
                                    <label for="validationDefaultUsername" class="form-label">FOTO 3</label>
                                    <div class="input-group">

                                        <input type="file" class="form-control" id="foto03" name="foto03">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <label for="validationDefault02" class="form-label">FOTO 4</label>
                                    <input type="file" class="form-control" id="foto04" name="foto04">
                                </div>
                                <div class="col-md-2">
                                    <label for="validationDefaultUsername" class="form-label">FOTO 5</label>
                                    <div class="input-group">

                                        <input type="file" class="form-control" id="foto05" name="foto05">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Kirim Data</label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary"> <i class="bi-check"></i> Kirim</button>
                                    <button class="btn btn-danger"> <a href="galeri_desa.php" style="color:white ; "> <i class="bi-backspace-fill"></i> Kembali</a></button>
                                </div>
                            </div>

                        </form><!-- End General Form Elements -->

                        <p><?php echo $judul_galeri_err; ?></p>

                        <p><?php echo $foto01_err; ?></p>
                        <p><?php echo $foto02_err; ?></p>
                        <p><?php echo $foto03_err; ?></p>
                        <p><?php echo $foto04_err; ?></p>
                        <p><?php echo $foto05_err; ?></p>
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