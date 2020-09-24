<?php 
include 'config/koneksi.php';
$result = mysqli_query($conn, "SELECT * FROM jurusan");

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h3>Tambah data mahasiswa</h3>
	<form action="" method="POST">
		
		<label for="nim">NIM</label>
		<input type="text" id="nim" name="nim"><br>
		
		<label for="nama">Nama</label>
		<input type="text" id="nama" name="nama"><br>
			
		<label for="jk">Jenis Kelamin</label>
		<select name="jenis_kelamin" id="jk">
			<option value="L">Laki-laki</option>
			<option value="P">Perempuan</option>
		</select><br>
			
		<label for="jur">Jurusan</label>
		<select name="jurusan" id="jur">
			<?php foreach ($result as $row): ?>
			<option value="<?= $row['id']; ?>"><?php echo $row['nama'];?></option>
			<?php endforeach ?>
		</select><br>
			
		<label for="alamat">Alamat</label>
		<textarea rows="3" cols="30" name="alamat" id="alamat"></textarea><br>
		
		<label for="telep">No Telepon</label>
		<input type="text" id="telep" name="telep"><br>	
		
		<label for="email">E-Mail</label>
		<input type="email" id="email" name="email">
		<br>	
		<button type="submit" name="submit">Simpan</button>
	</form>
</body>
</html>

<?php 
if (isset($_POST['submit'])) {
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$jurusan = $_POST['jurusan'];
	$alamat = $_POST['alamat'];
	$telep = $_POST['telep'];
	$email = $_POST['email'];

$sql = "INSERT into mahasiswa VALUES ('','$nim', '$nama', '$jenis_kelamin', '$jurusan', '$alamat', '$telep', '$email', '', '')";

	$query = mysqli_query($conn, $sql);

	if ($query) {
		echo "Data Berhasil Disimpan!";
	} else {
		echo "Data Gagal Disimpan!";
	}

}

 ?>