
<?php 
include '../koneksi/koneksi.php';

$nama = $_POST['nama']; 
$nik = $_POST['nik']; 
$jenis_aduan = $_POST['jenis_aduan']; 
$isi = $_POST['isi']; 

$rand = rand();
$ekstensi =  array('png','jpg','jpeg');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

$waktu = date("Y-m-d");

if(!in_array($ext,$ekstensi) ) {
	header("location:pengaduan.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 9044070){		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['foto']['tmp_name'], '../admin/pengajuan/aduan/'.$rand.'_'.$filename);
		mysqli_query($koneksi, "INSERT INTO aduan VALUES(NULL,'$nama' ,'$nik','$jenis_aduan','$isi','$xx', '$waktu')");
		echo "<script>alert('ADUAN AKAN DIPROSES PASTIKAN NIK ANDA SUDAH TERDAFTAR DI DESA '); window.location.href='pengaduan.php'</script>";
	}else{
		echo "<script>alert('Ajuan Anda Gagal Di Kirim Ukuran File terlalu Besar'); window.location.href='pengaduan.php'</script>";
	}
}?>