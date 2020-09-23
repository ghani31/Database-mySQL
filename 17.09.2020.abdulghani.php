<?php 

include 'config/koneksi.php';
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

 ?>

 
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>
    <h3>Data Jurusan</h3>
     <a href="add-mahasiswa.php">Add Data</a>
     <br><br>
     <table border="1" cellpadding="7" cellspacing="0">
        <tr>
            <td>ID</td>
            <td>NIM</td>
            <td>Nama</td>
            <td>Jenis Kelamin</td>
            <td>Jurusan</td>
            <td>Alamat</td>
            <td>No Telepon</td>
            <td>E-mail</td>
            <td></td>
        </tr>
        
        <?php foreach ($result as $row): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nim']; ?></td>
            <td><?php echo $row['nama']; ?></td>
            <td><?php echo $row['jenis_kelamin']; ?></td>
            <td><?php echo $row['jurusan_id']; ?></td>
            <td><?php echo $row['alamat']; ?></td>
            <td><?php echo $row['no_telepon']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><button>Edit</button> <button>Hapus</button></td>
        </tr>
    <?php endforeach ?>
     </table>
 </body>
 </html>