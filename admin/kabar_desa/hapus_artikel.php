<?php 
// koneksi database
include '../../koneksi/koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_artikel = $_GET['id_artikel'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from artikel_desa where id_artikel='$id_artikel'");
 
// mengalihkan halaman kembali ke index.php
header("location:artikel_desa.php");
 
?>