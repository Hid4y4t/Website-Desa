<?php
include '../koneksi/koneksi.php';
 
// menangkap data yang di kirim dari form

$nama = $_POST['nama'];

$nik = $_POST['nik'];

$pesan = $_POST['pesan'];

$waktu = date("Y-m-d");



// menginput data ke database
mysqli_query($koneksi,"insert into masukan values('','$nama','$nik','$pesan','$waktu')");

echo "<script>alert('MASUKAN AKAN DIPROSES PASTIKAN NIK ANDA SUDAH TERDAFTAR DI DESA '); window.location.href='berita_desa.php'</script>";



?>