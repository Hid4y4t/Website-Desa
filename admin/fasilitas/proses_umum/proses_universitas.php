
<?php
include '../../../koneksi/koneksi.php';
 
// menangkap data yang di kirim dari form


$npsn = $_POST['npsn'];

$nama_sekolah = $_POST['nama_sekolah'];

$status = $_POST['status'];

$alamat = $_POST['alamat'];


//Query input menginput data kedalam tabel barang
  $sql="insert into universitas (npsn, nama_sekolah, status, alamat ) values
		( '$npsn', '$nama_sekolah','$status','$alamat')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($koneksi,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
    header("location:../fasilitas_desa.php?alert=Berhasil input data");
	
  }


else {
    // header("location:tambah_pindah.php?alert=gagal insert data Periksa kembali NIK");
    echo "<script>alert('DATA GAGAL DI INPUTKAN '); window.location.href='../fasilitas_desa.php'</script>";

}  

?>