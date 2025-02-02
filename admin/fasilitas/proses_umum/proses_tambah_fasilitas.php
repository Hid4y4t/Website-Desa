

<?php
include '../../../koneksi/koneksi.php';
 
// menangkap data yang di kirim dari form


$nama = $_POST['nama'];

$lokasi = $_POST['lokasi'];

$nomor = $_POST['nomor'];

$keterangan = $_POST['keterangan'];


//Query input menginput data kedalam tabel barang
  $sql="insert into FASILITAS_umum (nama, lokasi, nomor, keterangan ) values
		( '$nama', '$lokasi','$nomor','$keterangan')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($koneksi,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
    header("location:tambah_fasilitas_umum.php?alert=Berhasil input data");
	
  }


else {
    // header("location:tambah_pindah.php?alert=gagal insert data Periksa kembali NIK");
    echo "<script>alert('DATA GAGAL DI INPUTKAN '); window.location.href='tambah_fasilitas_umum.php'</script>";

}  

?>
