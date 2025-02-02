

<?php
include '../../koneksi/koneksi.php';
 
// menangkap data yang di kirim dari form
$nik  = $_POST['nik'];

$nama = $_POST['nama'];

$alamat = $_POST['alamat'];

$status_pernikahan = $_POST['status_pernikahan'];

$pekerjaan = $_POST['pekerjaan'];




//Query input menginput data kedalam tabel barang
  $sql="insert into data_kemiskinan (nik, nama, alamat, status_pernikahan, pekerjaan ) values
		('$nik', '$nama', '$alamat','$status_pernikahan','$pekerjaan')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($koneksi,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
    header("location:tambah_kemiskinan.php?alert=Berhasil input data");
	
  }


else {
    // header("location:tambah_pindah.php?alert=gagal insert data Periksa kembali NIK");
    echo "<script>alert('DATA GAGAL DI INPUTKAN PERIKSA KEMBALI NIK PENDUDUK'); window.location.href='tambah_kemiskinan.php'</script>";

}  

?>