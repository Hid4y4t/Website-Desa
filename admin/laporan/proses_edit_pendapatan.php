<?php 
// koneksi database
include '../../koneksi/koneksi.php';
$id_pendapatan = $_POST['id_pendapatan'];
$pendapatan = $_POST['pendapatan'];
$anggaran = $_POST['anggaran'];
$realisasi = $_POST['realisasi'];

// menginput data ke database
mysqli_query($koneksi,"update pendapatan_desa set pendapatan='$pendapatan', anggaran='$anggaran', realisasi='$realisasi' where id_pendapatan='$id_pendapatan'");
 
// mengalihkan halaman kembali ke index.php
header("location:../index.php?alert=berhasil_edit");
 
?>