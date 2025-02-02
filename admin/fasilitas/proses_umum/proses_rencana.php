
<?php
include '../../../koneksi/koneksi.php';

// menangkap data yang di kirim dari form


$jenis_pembangunan = $_POST['jenis_pembangunan'];

$nama_pembangunan = $_POST['nama_pembangunan'];

$anggaran = $_POST['anggaran'];

$rencana_mulai_pembangunan = $_POST['rencana_mulai_pembangunan'];

$rencana_akhir_pembangunan = $_POST['rencana_akhir_pembangunan'];

$lokasi_pembangunan = $_POST['lokasi_pembangunan'];


//Query input menginput data kedalam tabel barang
$sql = "insert into rencana_pembangunan (jenis_pembangunan, nama_pembangunan, anggaran, rencana_mulai_pembangunan, rencana_akhir_pembangunan, lokasi_pembangunan) values
		( '$jenis_pembangunan', '$nama_pembangunan','$anggaran','$rencana_mulai_pembangunan','$rencana_akhir_pembangunan','$lokasi_pembangunan')";

//Mengeksekusi/menjalankan query diatas	
$hasil = mysqli_query($koneksi, $sql);

//Kondisi apakah berhasil atau tidak
if ($hasil) {
    echo "<script>alert('BERSAHIL DI INPUTKAN '); window.location.href='tambah_rencana.php'</script>";
} else {
    // header("location:tambah_pindah.php?alert=gagal insert data Periksa kembali NIK");
    echo "<script>alert('DATA GAGAL DI INPUTKAN '); window.location.href='../rencana_pembangunan.php'</script>";
}

?>