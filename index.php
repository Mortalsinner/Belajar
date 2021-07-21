<?php

    require 'functions.php';
    $mahasiswa= query("SELECT * FROM mahasiswa2");


    // tombol cari di klik

    if ( isset($_POST["cari"]) ) {
        $mahasiswa = cari($_POST["keyword"]);
    }






// Ambil data (fetch) mahasiswa dari object result
    // mysqli_fetch_row() // mengembalikan array numerik
    // mysqli_fetch_assoc() // mengembalikan array associative
    // mysqli_fetch_array() // mengembalikan array numerik dan associative
    // mysqli_fetch_object()
?>
<html>
    <head>
        <title>Halaman Admin</title>
    </head>
    <body>
        

    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br><br>


    <form action="" method="post">
    

    <input type="text" name="keyword" size="40" autofocus
    placeholder="masukan pencarian" autocomplete="off">
    <button type="submit" name="cari">Cari!</button>
    <br><br>

    </form>


    <table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Nama</th>
        <th>nrp</th>
        <th>email</th>
        <th>jurusan</th>
        <th>umur</th>
    </tr>
    <?php $i= 1; ?>
    <?php foreach ( $mahasiswa as $row) :?>
    <tr>
        <th><?= $i; ?></th>
        <td>
            <a href="ubah.php?id=<?= $row["id"] ; ?> ">ubah</a>
            <a href="hapus.php?id=<?= $row["id"] ; ?>" onclick="return confirm('Apakah anda yakin ?')">hapus</a>
        </td>
        <td><?= $row ["nama"]; ?></td>
        <td><?= $row ["nrp"]; ?></td>
        <td><?= $row ["email"]; ?></td>
        <td><?= $row ["jurusan"]; ?></td>
        <td><?= $row ["umur"]; ?></td>
     </tr>
     <?= $i++; ?>
    <?php endforeach; ?>

       </table>



    </body>
</html>