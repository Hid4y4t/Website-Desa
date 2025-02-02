<?php 
// koneksi database
include '../../koneksi/koneksi.php';

$id_informasi  = $_POST['id_informasi'];
$judul  = $_POST['judul'];
$keterangan  = $_POST['keterangan'];
$waktu = date("Y-m-d");


// menginput data ke database
mysqli_query($koneksi,"update informasi set judul='$judul', keterangan='$keterangan', waktu='$waktu'  where id_informasi='$id_informasi'");
 
// mengalihkan halaman kembali ke index.php
echo "<script>alert('DATA Berhasil Dirubah'); window.location.href='profile.php'</script>";

 
?>