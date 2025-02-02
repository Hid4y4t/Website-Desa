<?php 
// koneksi database
include '../../koneksi/koneksi.php';
$id_penggunaan_dana = $_POST['id_penggunaan_dana'];
$penggunaan = $_POST['penggunaan'];
$dana = $_POST['dana'];


// menginput data ke database
mysqli_query($koneksi,"update penggunaan_dana_desa set penggunaan='$penggunaan',  dana='$dana' where id_penggunaan_dana='$id_penggunaan_dana'");
 
// mengalihkan halaman kembali ke index.php
header("location:../index.php?alert=berhasil_edit");
