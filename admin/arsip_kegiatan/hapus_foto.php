<?php 
// koneksi database
include '../../koneksi/koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_arsip_foto = $_GET['id_arsip_foto'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from arsip_foto where id_arsip_foto='$id_arsip_foto'");
 
// mengalihkan halaman kembali ke index.php
header("location:arsip_kegiatan.php");
 
?>