<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


<?php
$koneksi = mysqli_connect("localhost","root","","upload");

$sql = "SELECT * FROM upload ORDER BY id DESC";
$query = mysqli_query($koneksi, $sql) or die (mysqli_error());
while($data = mysqli_fetch_array($query)){
    echo "Nama File: <b>$data[nama_file]</b>";
    echo "<br>";
    echo "Tanggal: <b>$data[deskripsi]</b>";
    echo "<br>";
    echo "<a href='hasil_upload.php?file=$data[nama_file]'>Download</a>";
    echo "<br>";
}
?>
</body>

</html>