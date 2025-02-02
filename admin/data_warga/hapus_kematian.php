<?php 
// koneksi database
include '../../koneksi/koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_kematian = $_GET['id_kematian'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from data_kematian where id_kematian='$id_kematian'");
 
// mengalihkan halaman kembali ke index.php
header("location:data_warga.php");
 
?>