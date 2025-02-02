<?php 
// koneksi database
include '../../../koneksi/koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_arsip_surat_keluar = $_GET['id_arsip_surat_keluar'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from arsip_surat_keluar where id_arsip_surat_keluar='$id_arsip_surat_keluar'");
 
// mengalihkan halaman kembali ke index.php
header("location:../arsip_surat.php");
 
?>