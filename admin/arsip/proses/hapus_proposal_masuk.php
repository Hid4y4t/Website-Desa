<?php 
// koneksi database
include '../../../koneksi/koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_arsip_proposal_masuk = $_GET['id_arsip_proposal_masuk'];
 
// menghapus data dari database
mysqli_query($koneksi,"delete from arsip_proposal_masuk where id_arsip_proposal_masuk='$id_arsip_proposal_masuk'");
 
// mengalihkan halaman kembali ke index.php
header("location:../arsip_proposal.php");
 
?>