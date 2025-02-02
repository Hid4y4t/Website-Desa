<?php 
// koneksi database
include '../../koneksi/koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_penggunaan_dana = $_GET['id_penggunaan_dana'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from penggunaan_dana_desa where id_penggunaan_dana='$id_penggunaan_dana'");
 
// mengalihkan halaman kembali ke index.php
header("location:../index.php");
 
?>