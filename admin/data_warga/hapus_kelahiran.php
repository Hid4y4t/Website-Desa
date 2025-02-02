<?php 
// koneksi database
include '../../koneksi/koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_kelahiran = $_GET['id_kelahiran'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from kelahiran where id_kelahiran='$id_kelahiran'");
 
// mengalihkan halaman kembali ke index.php
header("location:data_warga.php");
 
?>