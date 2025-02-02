
<?php 
include '../koneksi/koneksi.php';

$nik = $_POST['nik']; 
$nama_lengkap = $_POST['nama_lengkap']; 
$nomor_hp = $_POST['nomor_hp']; 
$jenis_proposal = $_POST['jenis_proposal']; 



$rand = rand();
$ekstensi =  array('pdf');
$filename = $_FILES['proposal']['name'];
$ukuran = $_FILES['proposal']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

$pesan = $_POST['pesan']; 
$tanggal = date("Y-m-d H:i:s");
if(!in_array($ext,$ekstensi) ) {
	echo "<script>alert('DATA ANDA GAGAL DIKIRIM FORMAT PROPOSAL HARUS PDF'); window.location.href='formulir_1.php'</script>";
}else{
	if($ukuran < 9044070){		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['proposal']['tmp_name'], '../admin/pengajuan/pengajuan/'.$rand.'_'.$filename);
		mysqli_query($koneksi, "INSERT INTO proposal_pengajuan VALUES(NULL,'$nik' ,'$nama_lengkap','$nomor_hp','$jenis_proposal','$xx', '$pesan', '$tanggal')");
		echo "<script>alert('PROPOSAL AKAN DIPROSES PASTIKAN NIK PENANGGUNGJAWAB SUDAH TERDAFTAR DI DESA '); window.location.href='formulir_1.php'</script>";
	}else{
		echo "<script>alert('Ajuan Anda Gagal Di Kirim Ukuran File terlalu Besar'); window.location.href='formulir_1.php'</script>";
	}
}?>
