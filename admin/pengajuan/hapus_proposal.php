<?php 
// koneksi database
include '../../koneksi/koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_proposal = $_GET['id_proposal'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from proposal_pengajuan where id_proposal='$id_proposal'");
 
// mengalihkan halaman kembali ke index.php
header("location:pengajuan_proposal.php");
 
?>