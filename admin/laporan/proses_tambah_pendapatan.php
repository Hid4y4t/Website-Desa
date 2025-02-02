<?php 

include '../../koneksi/koneksi.php';
 
// menangkap data yang di kirim dari form
$pendapatan = $_POST['pendapatan'];
$anggaran = $_POST['anggaran'];
$realisasi = $_POST['realisasi'];

// menginput data ke database
mysqli_query($koneksi,"insert into pendapatan_desa values('','$pendapatan','$anggaran','$realisasi')");

header('location:tambah_pendapatan.php?alert=Tersimpan');



?>