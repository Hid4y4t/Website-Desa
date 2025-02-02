<?php 
// koneksi database
include '../../koneksi/koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_pendapatan = $_GET['id_pendapatan'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from pendapatan_desa where id_pendapatan='$id_pendapatan'");
 
// mengalihkan halaman kembali ke index.php
header("location:../index.php");
 
?>