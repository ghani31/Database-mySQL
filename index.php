<?php 

$conn = mysqli_connect('localhost', 'root', '', 'db_mahasiswa');
$result = mysqli_query($conn, "SELECT * FROM jurusan");

 ?>

 <table border="1" cellpadding="7" cellspacing="0">
     <tr>
         <td>ID</td>
         <td>Nama Jurusan</td>
         <td>Aksi</td>
     </tr>
     <?php foreach ($result as $row): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nama']; ?></td>
            <td><button>Edit</button> <button>Hapus</button></td>
        </tr>
    <?php endforeach ?>
 </table>