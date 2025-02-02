<?php 
// koneksi database
include '../../koneksi/koneksi.php';


$id_pindah  = $_POST['id_pindah'];
$nik  = $_POST['nik'];

$nama = $_POST['nama'];

$tempat_lahir = $_POST['tempat_lahir'];

$tanggal_lahir = $_POST['tanggal_lahir'];


$jenis_kelamin = $_POST['jenis_kelamin'];

$agama = $_POST['agama'];

$pendidikan = $_POST['pendidikan'];

$alamat_asal = $_POST['alamat_asal'];

$alamat_baru = $_POST['alamat_baru'];

$tanggal_pindah = $_POST['tanggal_pindah'];


$alamat_asal = $_POST['alamat_asal'];

$alamat_baru = $_POST['alamat_baru'];

$tanggal_pindah = $_POST['tanggal_pindah'];

// menginput data ke database
mysqli_query($koneksi,"update data_pindah set nik='$nik', nama='$nama', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin', agama='$agama', pendidikan='$pendidikan',   alamat_asal='$alamat_asal' , alamat_baru='$alamat_baru', tanggal_pindah='$tanggal_pindah' where id_pindah='$id_pindah'");
 



// mengalihkan halaman kembali ke index.php
echo "<script>alert('DATA Berhasil Dirubah'); window.location.href='data_warga.php'</script>";


?>