<?php 
// koneksi database
include '../../koneksi/koneksi.php';

$id_warga = $_POST['id_warga'];

$nama_lengkap = $_POST['nama_lengkap'];

$tempat_lahir = $_POST['tempat_lahir'];

$tanggal_lahir = $_POST['tanggal_lahir'];

$jenis_kelamin = $_POST['jenis_kelamin'];

$alamat = $_POST['alamat'];

$agama = $_POST['agama'];

$pendidikan = $_POST['pendidikan'];

$status_perkawinan = $_POST['status_perkawinan'];

// menginput data ke database
mysqli_query($koneksi,"update data_warga_desa set nama_lengkap='$nama_lengkap', tempat_lahir='$tempat_lahir' , tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin', alamat='$alamat', agama='$agama', pendidikan='$pendidikan' , status_perkawinan='$status_perkawinan' where id_warga='$id_warga' ");
 
// mengalihkan halaman kembali ke index.php
header("location:data_warga.php");

 
?>