<?php 
// koneksi database
include '../../koneksi/koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_program = $_GET['id_program'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from program_kerja where id_program='$id_program'");
 
// mengalihkan halaman kembali ke index.php
header("location:profile.php");
 
?>