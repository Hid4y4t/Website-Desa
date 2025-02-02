<?php
include '../../koneksi/koneksi.php';

// menangkap data yang di kirim dari form
$nama_kepala_keluarga  = $_POST['nama_kepala_keluarga'];

$no_kk = $_POST['no_kk'];

$nama_bayi = $_POST['nama_bayi'];

$jenis_kelamin = $_POST['jenis_kelamin'];

$tanggal_lahir = $_POST['tanggal_lahir'];

$tempat_dilahirkan = $_POST['tempat_dilahirkan'];

//Query input menginput data kedalam tabel barang
$sql = "insert into kelahiran (nama_kepala_keluarga, no_kk , nama_bayi, jenis_kelamin, tanggal_lahir, tempat_dilahirkan) values
		('$nama_kepala_keluarga', '$no_kk',  '$nama_bayi' , '$jenis_kelamin', '$tanggal_lahir', '$tempat_dilahirkan')";
//Mengeksekusi/menjalankan query diatas	
$hasil = mysqli_query($koneksi, $sql);

//Kondisi apakah berhasil atau tidak
if ($hasil) {
    header("location:data_warga.php?alert=Berhasil input data");
} else {
    // header("location:tambah_pindah.php?alert=gagal insert data Periksa kembali NIK");
    echo "<script>alert('DATA GAGAL DI INPUTKAN PERIKSA KEMBALI NIK PENDUDUK'); window.location.href='data_warga.php'</script>";
}

?>