<?php 
// koneksi database
include '../../koneksi/koneksi.php';


$id_kematian  = $_POST['id_kematian'];
$nik  = $_POST['nik'];

$nama = $_POST['nama'];


$tempat_lahir = $_POST['tempat_lahir'];

$tanggal_lahir = $_POST['tanggal_lahir'];


$jenis_kelamin = $_POST['jenis_kelamin'];

$agama = $_POST['agama'];

$pendidikan = $_POST['pendidikan'];


$tanggal = $_POST['tanggal'];

$bulan = $_POST['bulan'];

$tahun = $_POST['tahun'];



// menginput data ke database
mysqli_query($koneksi,"update data_kematian set nik='$nik', nama='$nama', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin', agama='$agama', pendidikan='$pendidikan',  tanggal='$tanggal' , bulan='$bulan', tahun='$tahun' where id_kematian='$id_kematian'");
 
// mengalihkan halaman kembali ke index.php
echo "<script>alert('DATA Berhasil Dirubah'); window.location.href='data_warga.php'</script>";

 
?>