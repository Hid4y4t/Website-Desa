<?php 

include '../../koneksi/koneksi.php';
 
// menangkap data yang di kirim dari form
$penggunaan = $_POST['penggunaan'];
$dana = $_POST['dana'];


// menginput data ke database
mysqli_query($koneksi,"insert into penggunaan_dana_desa values('','$penggunaan','$dana')");

header('location:tambah_penggunaan_dana.php?alert=Tersimpan');



?>