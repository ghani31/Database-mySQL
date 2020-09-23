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
		<label for="siswa">Mahasiswa</label>
		<input type="text" id="siswa" name="mahasiswa">
		<br>
		<button type="submit" name="submit">Simpan</button>
	</form>
</body>
</html>

<?php 
if (isset($_POST['submit'])) {
	$mahasiswa = $_POST['mahasiswa'];

	$result = "INSERT INTO mahasiswa (id,nim,nama,jenis_kelamin,jurusan_id,alamat,no_telepon,email, create_at,update_at) VALUES ('$mahasiswa', '', '')";
	$sql = mysqli_query($conn, $result);

	if ($sql) {
		echo "Data Berhasil Disimpan!";
	} else {
		echo "Data Gagal Disimpan!";
	}

}

 ?>