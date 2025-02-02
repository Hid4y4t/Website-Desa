
<?php 
include '../../koneksi/koneksi.php';
$nama = $_POST['nama'];

$jabatan = $_POST['jabatan'];


$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);


if(!in_array($ext,$ekstensi) ) {
	header("location:profile.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 1044070){		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['foto']['tmp_name'], '../../foto_aparatur_bpd/'.$rand.'_'.$filename);
		mysqli_query($koneksi, "INSERT INTO bpd VALUES(NULL,'$nama' ,'$jabatan','$xx')");
		header("location:profile.php?alert=berhasil");
	}else{
		header("location:profile.php?alert=gagal_ukuran");
	}
}?>
