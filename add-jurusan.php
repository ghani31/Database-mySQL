<?php 
include 'config/koneksi.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="" method="POST">
		<label for="jur">Jurusan</label>
		<input type="text" id="jur" name="jurusan">
		<br>
		<button type="submit" name="submit">Simpan</button>
	</form>
</body>
</html>

<?php 
if (isset($_POST['submit'])) {
	$jurusan = $_POST['jurusan'];

	$result = "INSERT INTO jurusan (nama, create_at,update_at) VALUES ('$jurusan', '', '')";
	$sql = mysqli_query($conn, $result);

	if ($sql) {
		echo "Data Berhasil Disimpan!";
	} else {
		echo "Data Gagal Disimpan!";
	}

}

 ?>