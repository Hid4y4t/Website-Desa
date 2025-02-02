<?php 
// koneksi database
include '../../../koneksi/koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_proposal_keluar = $_GET['id_proposal_keluar'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from arsip_proposal_keluar where id_proposal_keluar='$id_proposal_keluar'");
 
// mengalihkan halaman kembali ke index.php
header("location:../arsip_proposal.php");
 
?>