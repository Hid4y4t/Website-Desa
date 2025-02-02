
<?php 
include '../../koneksi/koneksi.php';
$judul_artikel = $_POST['judul_artikel'];

$keterangan = $_POST['keterangan'];

$waktu = date("Y-m-d");


$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif','pdf');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);


if(!in_array($ext,$ekstensi) ) {
	header("location:artikel_desa.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 1044070){		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['foto']['tmp_name'], '../../kabar_desa/berita_desa/'.$rand.'_'.$filename);
		mysqli_query($koneksi, "INSERT INTO artikel_desa VALUES(NULL,'$judul_artikel' ,'$keterangan','$waktu' ,'$xx')");
		header("location:artikel_desa.php?alert=berhasil");
	}else{
		header("location:artikel_desa.php?alert=gagal_ukuran");
	}
}?>

