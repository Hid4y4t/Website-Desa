<!DOCTYPE html>
<html>

<head>
	<title>aaa</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
	<div class="container">
		<h2 style="text-align: center;">Galeri</h2>
		<form action="user_act.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Nama Kegiatan :</label>
				<input type="text" class="form-control" placeholder="nama kegiatan" name="nama" required="required">
			</div>
			<div class="form-group">
				<label>Waktu :</label>
				<input type="text" class="form-control" placeholder="Masukkan Kontak" name="kontak" required="required">
			</div>
			<div class="form-group">
				<label>Jenis Kegiatan :</label>
				<input type="text" class="form-control" placeholder="jneis kegiatan" name="kontak" required="required">
			</div>
			<div class="form-group">
				<label>keterangan :</label>
				<textarea class="form-control" name="keterangan" required="required"></textarea>
			</div>
			<div class="form-group">
				<label>Foto :</label>
				<input type="file" name="foto" required="required">
				<p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
			</div>
			<div class="form-group">
				<label>Foto :</label>
				<input type="file" name="foto" required="required">
				<p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
			</div>
			<div class="form-group">
				<label>Foto :</label>
				<input type="file" name="foto" required="required">
				<p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
			</div>
			<div class="form-group">
				<label>Foto :</label>
				<input type="file" name="foto" required="required">
				<p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
			</div>
			<div class="form-group">
				<label>Foto :</label>
				<input type="file" name="foto" required="required">
				<p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
			</div>
			<input type="submit" name="" value="Simpan" class="btn btn-primary">
		</form>
	</div>

</body>

</html>