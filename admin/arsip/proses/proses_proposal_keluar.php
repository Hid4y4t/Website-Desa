
<?php 
include '../../../koneksi/koneksi.php';

$keterangan = $_POST['keterangan']; 
$tanggal = $_POST['tanggal']; 

$rand = rand();
$ekstensi =  array('png','jpg','jpeg','pdf');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);


if(!in_array($ext,$ekstensi) ) {
	header("location:../tambah_proposal_keluar.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 9044070){		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['foto']['tmp_name'], '../arsip_proposal/'.$rand.'_'.$filename);
		mysqli_query($koneksi, "INSERT INTO arsip_proposal_keluar VALUES(NULL,'$keterangan' ,'$tanggal','$xx')");
		header("location:../tambah_proposal_keluar.php?alert=berhasil");
	}else{
		header("location:../tambah_proposal_keluar.php?alert=gagal_ukuran");
	}
}?>
