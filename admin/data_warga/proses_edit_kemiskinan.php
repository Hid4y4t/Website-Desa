<?php 
// koneksi database
include '../../koneksi/koneksi.php';


$id_miskin  = $_POST['id_miskin'];
$nik  = $_POST['nik'];

$nama = $_POST['nama'];

$alamat = $_POST['alamat'];

$status_pernikahan = $_POST['status_pernikahan'];

$pekerjaan = $_POST['pekerjaan'];

// menginput data ke database
mysqli_query($koneksi,"update data_kemiskinan set nik='$nik', nama='$nama', alamat='$alamat' , status_pernikahan='$status_pernikahan', pekerjaan='$pekerjaan' where id_miskin='$id_miskin'");
 
// mengalihkan halaman kembali ke index.php
echo "<script>alert('DATA Berhasil Dirubah'); window.location.href='warga_tidak_mampu.php'</script>";

 
?>