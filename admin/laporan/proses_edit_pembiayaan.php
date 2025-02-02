<?php 
// koneksi database
include '../../koneksi/koneksi.php';
$id_pembiayaan = $_POST['id_pembiayaan'];
$pembiayaan = $_POST['pembiayaan'];
$anggaran = $_POST['anggaran'];
$realisasi = $_POST['realisasi'];

// menginput data ke database
mysqli_query($koneksi,"update pembiayaan_desa set pembiayaan='$pembiayaan', anggaran='$anggaran', realisasi='$realisasi' where id_pembiayaan='$id_pembiayaan'");
 
// mengalihkan halaman kembali ke index.php
header("location:../index.php?alert=berhasil_edit");
 
?>