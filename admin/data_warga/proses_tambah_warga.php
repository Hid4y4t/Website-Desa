

<?php
include '../../koneksi/koneksi.php';
 
// menangkap data yang di kirim dari form
$id_warga  = $_POST['id_warga'];


$nama_lengkap = $_POST['nama_lengkap'];

$tempat_lahir = $_POST['tempat_lahir'];

$tanggal_lahir = $_POST['tanggal_lahir'];

$jenis_kelamin = $_POST['jenis_kelamin'];

$alamat = $_POST['alamat'];

$agama = $_POST['agama'];

$pendidikan = $_POST['pendidikan'];

$status_perkawinan = $_POST['status_perkawinan'];


//Query input menginput data kedalam tabel barang
  $sql="insert into data_warga_desa (id_warga, nama_lengkap,tempat_lahir,tanggal_lahir,jenis_kelamin,alamat,agama,pendidikan,status_perkawinan ) values
		('$id_warga', '$nama_lengkap', '$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$alamat','$agama','$pendidikan','$status_perkawinan')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($koneksi,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
    header("location:tambah_warga.php?alert=Berhasil insert data");
	
  }


else {
    // header("location:tambah_warga.php?alert=gagal insert data");
    echo "<script>alert('DATA GAGAL DI INPUTKAN PERIKSA KEMBALI NIK PENDUDUK'); window.location.href='tambah_warga.php'</script>";
}  

?>
