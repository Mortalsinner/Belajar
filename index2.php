<?php

// Koneksi ke Database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");


// Ambil data dari table mahasiswa / query data mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa2");

// Ambil data (fetch) mahasiswa dari object result
    // mysqli_fetch_row() // mengembalikan array numerik
    // mysqli_fetch_assoc() // mengembalikan array associative
    // mysqli_fetch_array() // mengembalikan array numerik dan associative
    // mysqli_fetch_object()


    // while( $mhs = mysqli_fetch_assoc($result) ) {
    //     var_dump ($mhs);
    // }














?>
<html>
    <head>
        <title>Halaman Admin</title>
    </head>
    <body>
        

    <h1>Daftar Mahasiswa</h1>


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
    <?php while( $row = mysqli_fetch_assoc($result) ) :?>
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="">ubah</a>
            <a href="">hapus</a>
        </td>
        <td><?= $row ["nama"]; ?></td>
        <td><?= $row ["nrp"]; ?></td>
        <td><?= $row ["email"]; ?></td>
        <td><?= $row ["jurusan"]; ?></td>
        <td><?= $row ["umur"]; ?></td>
     </tr>
     <?= $i++; ?>
    <?php endwhile; ?>
   




    </table>

    </body>
</html>