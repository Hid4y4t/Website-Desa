

<?php
include '../../koneksi/koneksi.php';
 
// menangkap data yang di kirim dari form
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




//Query input menginput data kedalam tabel barang
  $sql="insert into data_kematian (nik, nama , tempat_lahir, tanggal_lahir, jenis_kelamin, agama, pendidikan , tanggal, bulan, tahun ) values
		('$nik', '$nama',  '$tempat_lahir' , '$tanggal_lahir', '$jenis_kelamin', '$agama', '$pendidikan', '$tanggal','$bulan','$tahun')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($koneksi,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
    header("location:data_warga.php?alert=Berhasil input data");
	
  }


else {
    // header("location:tambah_pindah.php?alert=gagal insert data Periksa kembali NIK");
    echo "<script>alert('DATA GAGAL DI INPUTKAN PERIKSA KEMBALI NIK PENDUDUK'); window.location.href='data_warga.php'</script>";

}  

?>