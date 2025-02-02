
<?php 
include '../../../koneksi/koneksi.php';


$prihal = $_POST['prihal'];
$nomor = $_POST['nomor'];
$tanggal = $_POST['tanggal']; 
$keterangan = $_POST['keterangan']; 




$rand = rand();
$ekstensi =  array('png','jpg','jpeg','pdf');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);


if(!in_array($ext,$ekstensi) ) {
	header("location:../tambah_surat_masuk.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 9044070){		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['foto']['tmp_name'], '../arsip_surat_masuk/'.$rand.'_'.$filename);
		mysqli_query($koneksi, "INSERT INTO arsip_surat_keluar VALUES(NULL,'$prihal','$nomor','$tanggal','$keterangan' ,'$xx')");
		header("location:../tambah_surat_keluar.php?alert=berhasil");
	}else{
		header("location:../tambah_surat_keluar.php?alert=gagal_ukuran");
	}
}?>

