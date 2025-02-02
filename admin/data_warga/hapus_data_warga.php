<?php 
// koneksi database
include '../../koneksi/koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_warga = $_GET['id_warga'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from data_warga_desa where id_warga='$id_warga'");
 
// mengalihkan halaman kembali ke index.php
header("location:data_warga.php");
 
?>