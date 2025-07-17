<?php

require 'fungsi.php';

$query = "SELECT * FROM mahasiswa";

$rows = query($query);

/// ambil data (fetch) dari tabel mahasiswa

/// mysqli_fetch_row
/// mysqli_fetch_assoc
/// mysqli_fetch_array
/// mysqli_fetch_object

//while($mhs = mysqli_fetch_assoc($result)) {

    //var_dump($mhs["nama"]); // menampilkan nama mahasiswa
    
//}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <a href="tambahmhs.php"><button>Tambah Data Mahasiswa</button></a>
    <table border="1" cellpadding="10px" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Foto</th>     
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>no. hp</th>
            <th>Aksi</th>
        </tr>
        <?php 
        $i = 1;
        foreach($rows as $mhs) { ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><img src="foto/<?= $mhs["foto"] ?>" width="200px"/></td>
            <td><?php echo $mhs["nama"]?></td>
            <td><?php echo $mhs["nim"]?></td>
            <td><?php echo $mhs["prodi"]?></td>
            <td><?php echo $mhs["nohp"]?></td>
            <td>
                <a href="ubahmhs.php?id=<?php echo $mhs["id"]?>">Ubah</a> |
                <a href="hapusmhs.php?id=<?php echo $mhs["id"]?>" onclick="return confirm('yakin pora?')">Hapus</a>
            </td>     
        </tr>
        <?php $i++; } ?>
    </table>
</body>
</html>
