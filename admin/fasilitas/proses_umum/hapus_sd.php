<?php 
// koneksi database
include '../../../koneksi/koneksi.php';
 
// menangkap data id yang di kirim dari url
$npsn = $_GET['npsn'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from sd_mi where npsn='$npsn'");
 
// mengalihkan halaman kembali ke index.php
header("location:../fasilitas_desa.php");
 
?>