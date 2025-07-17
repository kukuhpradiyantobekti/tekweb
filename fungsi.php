<?php

$koneksi = mysqli_connect("localhost", "root", "", "webti");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error($koneksi));
} else {
    echo "Koneksi berhasil!!!";
}

function query($query)
{
    global $koneksi;
    
    $result = mysqli_query($koneksi, $query);

    $rows = []; // array numeric

    while($row = mysqli_fetch_assoc($result)) 
    {
        $rows[] = $row;
    }

    return $rows;



}




function hapusmhs($id)
{
    global $koneksi;

    $query = "DELETE FROM mahasiswa WHERE id = $id";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

function editmahasiswa($data, $id)
{
    global $koneksi;

    $nama = $data["nama"];
    $nim = $data["nim"];
    $prodi = $data["prodi"];
    $nohp = $data["nohp"];

    $query = "UPDATE mahasiswa SET nama='$nama', nim='$nim', prodi='$prodi', nohp='$nohp' WHERE id=$id";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

function tambahdatamhs($data)
{
    global $koneksi;

    $nama = $data["nama"];
    $nim = $data["nim"];
    $prodi = $data["prodi"];
    $nohp = $data["nohp"];

    $file = $_FILES['foto']['name'];
    $namefile = date('dmy_hms') . '_' . $file;
    $tmp = $_FILES['foto']['tmp_name'];
    $folder = 'foto/';
    $path = $folder . $namefile;

    if (move_uploaded_file($tmp, $path)) {
        $query = "INSERT INTO mahasiswa (nama, nim, prodi, nohp, foto) VALUES ('$nama', '$nim', '$prodi', '$nohp', '$namefile')";
        mysqli_query($koneksi, $query);
        return mysqli_affected_rows($koneksi);
    } else {
        return 0;
    }
}










?>