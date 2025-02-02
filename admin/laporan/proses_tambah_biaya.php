<?php 

include '../../koneksi/koneksi.php';
 
// menangkap data yang di kirim dari form
$pembiayaan = $_POST['pembiayaan'];
$anggaran = $_POST['anggaran'];
$realisasi = $_POST['realisasi'];

// menginput data ke database
mysqli_query($koneksi,"insert into pembiayaan_desa values('','$pembiayaan','$anggaran','$realisasi')");

header('location:tambah_pembiayaan.php?alert=Tersimpan');



?>