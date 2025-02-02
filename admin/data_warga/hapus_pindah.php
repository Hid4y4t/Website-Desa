<?php 
// koneksi database
include '../../koneksi/koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_pindah = $_GET['id_pindah'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from data_pindah where id_pindah='$id_pindah'");
 
// mengalihkan halaman kembali ke index.php
header("location:data_warga.php");
 
?>