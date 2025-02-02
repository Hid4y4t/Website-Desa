<?php 
// koneksi database
include '../../koneksi/koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_belanja = $_GET['id_belanja'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from belanja_desa where id_belanja='$id_belanja'");
 
// mengalihkan halaman kembali ke index.php
header("location:../index.php");
 
?>