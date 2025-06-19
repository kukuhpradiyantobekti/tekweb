<?php

$koneksi = mysqli_connect("localhost", "root", "", "webti");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error($koneksi));
} else {
    echo "Koneksi berhasil!!!";
}

$result = mysqli_query($koneksi, "SELECT * FROM mahasiswa");

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
    <table border="1" cellpadding="10" cellspacing="10px">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>no. hp</th>
        </tr>
        <?php while($mhs = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $mhs["id"]?></td>
            <td><?php echo $mhs["nama"]?></td>
            <td><?php echo $mhs["nim"]?></td>
            <td><?php echo $mhs["prodi"]?></td>
            <td><?php echo $mhs["nohp"]?></td>    
        </tr>
        <?php } ?>
    </table>
</body>
</html>