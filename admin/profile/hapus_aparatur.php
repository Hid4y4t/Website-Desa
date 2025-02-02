<?php 
// koneksi database
include '../../koneksi/koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from aparatur_desa where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:profile.php");
 
?>