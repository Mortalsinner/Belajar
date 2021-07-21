<?php

require 'functions.php';


// Ambil data di URL
$id = $_GET["id"];

// Query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa2 WHERE id = $id")[0];


// memastikan tombol submit sudah ditekan atau belum 
if ( isset($_POST["submit"]) ) 

{

    // Cek apakah data berhasil diubah atau tidak
    if ( ubah($_POST) > 0){
        echo "
        <script>
         alert('Data Berhasil Diubah!');
         document.location.href= 'index.php';
         </script>
        ";
    } else {
        echo "
        <script>
        alert('Data Gagal untuk Diubah!');
        document.location.href= 'index.php';
        </script>
        ";
    }
 
}



?>


<html>
<head>
    <title>Ubah data Mahasiswa</title>
</head>
<body>
    <h1>Ubah Data Mahasiswa</h1>


    <form action="" method="post">
    <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
        
  
        <ul>
        <li><label for="nama">NAMA : </label>
        <input type="text" name="nama" id="nama" required
        value="<?= $mhs["nama"]; ?>">
        </li>
        </ul>

        <ul>
        <li><label for="nrp">NRP : </label>
        <input type="text" name="nrp" id="nrp" required
        value="<?= $mhs["nrp"]; ?>" >
        </li>
        </ul>

      
        <ul>
        <li><label for="email">EMAIL : </label>
        <input type="text" name="email" id="email" required 
        value="<?= $mhs["email"]; ?>">
        </li>
        </ul>
        

        <ul>
        <li><label for="jurusan">JURUSAN : </label>
        <input type="text" name="jurusan" id="jurusan" required
        value="<?= $mhs["jurusan"]; ?>" >
        </li>
        </ul>

        
        <ul>
        <li><label for="umur">UMUR : </label>
        <input type="text" name="umur" id="umur" required
        value="<?= $mhs["umur"]; ?>">
        </li>
        </ul>

        <ul>
        <li><button type="submit" name="submit">Ubah Data</button></li>
        </ul>


    </form>

</body>
</html>