<?php 
// koneksi database
include '../../koneksi/koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_surat = $_GET['id_surat'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from surat_pengajuan where id_surat='$id_surat'");
 
// mengalihkan halaman kembali ke index.php
header("location:pengajuan_surat.php");
 
?>