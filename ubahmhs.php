<?php

require 'fungsi.php';

$id = $_GET["id"];

$query = "SELECT * FROM mahasiswa WHERE id=$id";

$mhs = query($query)[0];



if (isset($_POST["kirim"])) 
{
   
    if (editmaasiswa($_POST, $id) > 0) 
    {
        echo "<script>
                alert('Data berhasil diedit!');
                window.location.href = 'datamhs.php';
              </script>";
    } else 
    {
        echo "<script>
                alert('Data gagal diedit!');
                window.location.href = 'datamhs.php';
              </script>";
    }



}



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
</head>
<body>
    <h1>Edit Data Mahasiswa</h1>
    <form action="" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required value="<?= $mhs["nama"] ?>" /><br><br>
        
        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" required value="<?= $mhs["nim"] ?>"/><br><br>
        
        <label for="prodi">Jurusan:</label>
        <input type="text" id="prodi" name="prodi" required value="<?= $mhs["prodi"] ?>"/><br><br>
        
        <label for="nohp">No. HP:</label>
        <input type="text" id="nohp" name="nohp" required value="<?= $mhs["nohp"] ?>"/><br><br>
        
        <button type="submit" name="submit">Ubah Data</button>
    </form>    
    
</body>
</html>