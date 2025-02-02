<?php 
// koneksi database
include '../../koneksi/koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_miskin = $_GET['id_miskin'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from data_kemiskinan where id_miskin='$id_miskin'");
 
// mengalihkan halaman kembali ke index.php
header("location:warga_tidak_mampu.php");
 
?>