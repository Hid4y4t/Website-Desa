<?php 
// koneksi database
include '../../../koneksi/koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_fasilitas = $_GET['id_fasilitas'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from fasilitas_umum where id_fasilitas='$id_fasilitas'");
 
// mengalihkan halaman kembali ke index.php
header("location:../fasilitas_desa.php");
 
?>