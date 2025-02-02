<?php 
// koneksi database
include '../../koneksi/koneksi.php';
$id_belanja = $_POST['id_belanja'];
$belanja = $_POST['belanja'];
$anggaran = $_POST['anggaran'];
$realisasi = $_POST['realisasi'];

// menginput data ke database
mysqli_query($koneksi,"update belanja_desa set belanja='$belanja', anggaran='$anggaran', realisasi='$realisasi' where id_belanja='$id_belanja'");
 
// mengalihkan halaman kembali ke index.php
header("location:../index.php?alert=berhasil_edit");
 
?>