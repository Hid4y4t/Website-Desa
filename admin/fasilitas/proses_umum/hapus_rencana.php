<?php 
// koneksi database
include '../../../koneksi/koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_pembangunan = $_GET['id_pembangunan'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from rencana_pembangunan where id_pembangunan='$id_pembangunan'");
 
// mengalihkan halaman kembali ke index.php
header("location:../rencana_pembangunan.php");
 
?>