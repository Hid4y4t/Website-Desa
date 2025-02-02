
<?php 
include '../koneksi/koneksi.php';

$nik = $_POST['nik']; 
$nama_lengkap = $_POST['nama_lengkap']; 
$nomor_hp = $_POST['nomor_hp']; 
$jenis_surat = $_POST['jenis_surat']; 



$rand = rand();
$ekstensi =  array('png','jpg','jpeg','pdf');
$filename = $_FILES['surat']['name'];
$ukuran = $_FILES['surat']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

$pesan = $_POST['pesan']; 
$tanggal = date("Y-m-d H:i:s");
if(!in_array($ext,$ekstensi) ) {
	header("location:formulir_1.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 9044070){		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['surat']['tmp_name'], '../admin/pengajuan/pengajuan/'.$rand.'_'.$filename);
		mysqli_query($koneksi, "INSERT INTO surat_pengajuan VALUES(NULL,'$nik' ,'$nama_lengkap','$nomor_hp','$jenis_surat','$xx', '$pesan', '$tanggal')");
		echo "<script>alert('SURAT AKAN DIPROSES PASTIKAN NIK ANDA SUDAH TERDAFTAR DI DESA '); window.location.href='formulir_1.php'</script>";
	}else{
		echo "<script>alert('Ajuan Anda Gagal Di Kirim Ukuran File terlalu Besar'); window.location.href='formulir_1.php'</script>";
	}
}?>
