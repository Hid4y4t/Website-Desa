<?php 

include '../../koneksi/koneksi.php';
 
// menangkap data yang di kirim dari form
$belanja = $_POST['belanja'];
$anggaran = $_POST['anggaran'];
$realisasi = $_POST['realisasi'];

// menginput data ke database
mysqli_query($koneksi,"insert into belanja_desa values('','$belanja','$anggaran','$realisasi')");

header('location:tambah_belanja.php?alert=Tersimpan');



?>