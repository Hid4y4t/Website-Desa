<?php 
// koneksi database
include '../../koneksi/koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_galeri = $_GET['id_galeri'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from galeri_publik where id_galeri='$id_galeri'");
 
// mengalihkan halaman kembali ke index.php
header("location:galeri_desa.php");
 
?>