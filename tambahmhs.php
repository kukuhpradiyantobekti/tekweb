<?php
$koneksi = mysqli_connect("localhost", "root", "", "webti");
if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $nim = $_POST["nim"];
    $prodi = $_POST["prodi"];
    $nohp = $_POST["nohp"];

    $query = "INSERT INTO mahasiswa VALUES ('', '$nama', '$nim', '$prodi', '$nohp')";
    mysqli_query($koneksi, $query);
    if (mysqli_affected_rows($koneksi) > 0) {
        echo "<script>
                alert('Data berhasil ditambahkan!');
                window.location.href = 'datamhs.php';
              </script>";
    } else {
        echo "<script>
                alert('Data gagal ditambahkan!');
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
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>
    <form action="" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br><br>
        
        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" required><br><br>
        
        <label for="prodi">Jurusan:</label>
        <input type="text" id="prodi" name="prodi" required><br><br>
        
        <label for="nohp">No. HP:</label>
        <input type="text" id="nohp" name="nohp" required><br><br>
        
        <button type="submit" name="submit">Simpan Data</button>
    </form>    
    
</body>
</html>