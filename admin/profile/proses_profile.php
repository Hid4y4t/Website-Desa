<?php 
// koneksi database
include '../../koneksi/koneksi.php';

$id_desa  = $_POST['id_desa'];
$nama_desa  = $_POST['nama_desa'];
$kabupaten  = $_POST['kabupaten'];

$kode_pos = $_POST['kode_pos'];

$alamat_kantor = $_POST['alamat_kantor'];

$telp = $_POST['telp'];

$email = $_POST['email'];
$kd_wil = $_POST['kd_wil'];
$sejarah_desa = $_POST['sejarah_desa'];

// menginput data ke database
mysqli_query($koneksi,"update profile_desa set nama_desa='$nama_desa', kabupaten='$kabupaten', kode_pos='$kode_pos' , alamat_kantor='$alamat_kantor', telp='$telp' , email='$email', kd_wil='$kd_wil', sejarah_desa='$sejarah_desa' where id_desa='$id_desa'");
 
// mengalihkan halaman kembali ke index.php
echo "<script>alert('DATA Berhasil Dirubah'); window.location.href='profile.php'</script>";

 
?>