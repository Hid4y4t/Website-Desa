<?php 
// koneksi database
include '../../koneksi/koneksi.php';

$id_vs  = $_POST['id_vs'];
$visi  = $_POST['visi'];
$misi  = $_POST['misi'];



// menginput data ke database
mysqli_query($koneksi,"update visi_misi set visi='$visi', misi='$misi' where id_vs='$id_vs'");
 
// mengalihkan halaman kembali ke index.php
echo "<script>alert('DATA Berhasil Dirubah'); window.location.href='profile.php'</script>";

 
?>