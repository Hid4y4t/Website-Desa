<?php 

session_start();
 

include '../koneksi/koneksi.php';
 

$username = $_POST["username"];
$password = md5($_POST["password"]);
 

$data ="select * from admin where username='".$username."' and password='".$password."' limit 1";
 
$hasil = mysqli_query ($koneksi, $data);
$cek = mysqli_num_rows($hasil);
 
if($cek>0){

$row= mysqli_fetch_assoc($hasil);
$_SESSION["id"] = $row ["id"];
	$_SESSION["nama"] = $row ["nama"];
    $_SESSION["username"] = $row ["username"];

	
	header("location:../admin/index.php");
}else{
	header("location:index.php?pesan=gagal");
}
?>