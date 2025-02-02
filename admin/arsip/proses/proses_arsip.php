
<?php 
include '../../../koneksi/koneksi.php';


$judul = $_POST['judul'];
$keterangan = $_POST['keterangan'];
$waktu = $_POST['waktu']; 





$rand = rand();
$ekstensi =  array('png','jpg','jpeg','pdf','docx','xlsx');
$filename = $_FILES['berkas']['name'];
$ukuran = $_FILES['berkas']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);


if(!in_array($ext,$ekstensi) ) {
	header("location:../tambah_arsip.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 9044070){		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['berkas']['tmp_name'], '../arsip_lain/'.$rand.'_'.$filename);
		mysqli_query($koneksi, "INSERT INTO arsip_lain VALUES(NULL,'$judul','$keterangan','$waktu','$xx')");
		header("location:../tambah_arsip.php?alert=berhasil");
	}else{
		header("location:../tambah_arsip.php?alert=gagal_ukuran");
	}
}?>
