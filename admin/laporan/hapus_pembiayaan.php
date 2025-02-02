<?php 
// koneksi database
include '../../koneksi/koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_pembiayaan = $_GET['id_pembiayaan'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from pembiayaan_desa where id_pembiayaan='$id_pembiayaan'");
 
// mengalihkan halaman kembali ke index.php
header("location:../index.php");
 
?>