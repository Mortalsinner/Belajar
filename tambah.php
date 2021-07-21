<?php

require 'functions.php';

// memastikan tombol submit sudah ditekan atau belum 
if ( isset($_POST["submit"]) ) 

{

    // Cek apakah data berhasil ditambahkan atau tidak
    if (tambah($_POST) > 0){
        echo "
        <script>
         alert('Data Berhasil Ditambahkan!');
         document.location.href= 'index.php';
         </script>
        ";
    } else {
        echo "
        <script>
        alert('Data Gagal untuk Ditambahkan!');
        document.location.href= 'index.php';
        </script>
        ";
    }
 
}



?>


<html>
<head>
    <title>Tambah data Mahasiswa</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>


    <form action="" method="post">
        <ul>
        <li><label for="nama">NAMA : </label>
        <input type="text" name="nama" id="nama" required>
        </li>
        </ul>

        <ul>
        <li><label for="nrp">NRP : </label>
        <input type="text" name="nrp" id="nrp" required>
        </li>
        </ul>

      
        <ul>
        <li><label for="email">EMAIL : </label>
        <input type="text" name="email" id="email" required>
        </li>
        </ul>
        

        <ul>
        <li><label for="jurusan">JURUSAN : </label>
        <input type="text" name="jurusan" id="jurusan" required>
        </li>
        </ul>

        
        <ul>
        <li><label for="umur">UMUR : </label>
        <input type="text" name="umur" id="umur" required>
        </li>
        </ul>

        <ul>
        <li><button type="submit" name="submit">Tambah Data</button></li>
        </ul>


    </form>

</body>
</html>