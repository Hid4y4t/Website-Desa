

<?php
include '../../koneksi/koneksi.php';
 
// menangkap data yang di kirim dari form
$program_kerja  = $_POST['program_kerja'];






//Query input menginput data kedalam tabel barang
  $sql="insert into program_kerja (program_kerja ) values
		('$program_kerja')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($koneksi,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
    header("location:profile.php?alert=Berhasil input data");
	
  }


else {
    // header("location:tambah_pindah.php?alert=gagal insert data Periksa kembali NIK");
    echo "<script>alert('DATA GAGAL DI INPUTKAN PERIKSA KEMBALI NIK PENDUDUK'); window.location.href='profile.php'</script>";

}  

?>