<?php

    $koneksi = mysqli_connect("localhost:3306", "root", "", "webti");       

    if (!$koneksi) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }
    else {
        echo "Koneksi berhasil!!!";
    }



?>








<!DOCTYPE html>
<html>
    <head>
        <title>
           HOME - WEB TEKNOLOGI INFORMAS
        </title>
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ancizar+Serif:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <h1 align="center">WEBSITE <br> TEKNOLOGI INFORMASI</h1> <!--Element-->
        <hr width="50%" size="5px" color="black">
        <nav align="center">
            <a href="index.html">HOME</a> |
            <a href="profile.html">PROFILE</a> |
            <a href="login.html">LOGIN</a> 
            <a href="datamhs.php">datamhs</a> |
        </nav>
        <h1 align="center">
        <img src="https://city-png.b-cdn.net/preview/preview_public/uploads/preview/hd-formula-one-official-logo-design-transparent-background-701751712230740oebtjlwozo.png" width="1000px"/>
        </h1>
        <p>
           <b> AC Milan, adalah klub Italia yang berbasis di Milan, Lombardia, yang bermain di Serie A. </b>
            Mereka bermain dengan seragam bergaris merah-hitam dan celana putih (kadang-kadang hitam), 
            sehingga dijuluki Rossoneri <i><b><u>("merah-hitam")</u></b></i>. Milan adalah tim tersukses pertama dalam sejarah 
            persepak bolaan Italia, menjuarai Serie A 19 kali dan Piala Italia 5 kali. <u>Klub besar Eropa 
            ini adalah peraih 7 tropi UCL dan 19 Scudetto Liga Italia dan 2 tropi Seri B.</u>
        </p>
        <h2>Daftar Belanja</h2>
        <ol> <!--list angka-->
            <li>baju</li>
            <ul>
                <li>long slave</li>
                <li>trening</li>
            </ul>
            <li>sepatu</li>
            <ul>
                <li>bola</li>
                <li>runing</li>
                <li>snikers</li>
            </ul>
            <li>celana</li>
            <ul>
                <li>joger</li>
                <li>chinos</li>
                <li>cargo</li>
            </ul>
            <li>topi</li>
            <ul>
                <li>nike</li>
            </ul>
        </ol>   
    </body>
</html>