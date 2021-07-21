<?php

// Koneksi ke Database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");


function query( $query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}






function tambah ($data) {

    global $conn;

    $nama = htmlspecialchars($data["nama"]);
    $nrp = htmlspecialchars($data["nrp"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $umur = htmlspecialchars($data["umur"]);
 
    $query = "INSERT INTO mahasiswa2
                         VALUES
                   ('','$nama','$nrp','$email','$jurusan','$umur')
                ";

    mysqli_query($conn, $query);


    return mysqli_affected_rows($conn);
}


function hapus ($id) {
     global $conn;
     mysqli_query($conn, "DELETE FROM mahasiswa2 WHERE id= $id");

     return mysqli_affected_rows($conn);
}

function ubah($data) {

    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $nrp = htmlspecialchars($data["nrp"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $umur = htmlspecialchars($data["umur"]);


    $query = " UPDATE mahasiswa2 SET
                nama = '$nama',
                nrp = '$nrp',
                email = '$email',
                jurusan = '$jurusan',
                umur = '$umur'
                WHERE id = $id
             "
                ;

    mysqli_query($conn, $query);


    return mysqli_affected_rows($conn);
}

function cari ($keyword) {
    $query = "SELECT * FROM mahasiswa2 
                WHERE
                nama LIKE '%$keyword%' OR
                nrp LIKE '%$keyword%' OR
                email LIKE'%$keyword%' OR
                jurusan LIKE'%$keyword%' 
                ";

            return query($query);
}

function registrasi ($data) {
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);


    // Cek username sudah ada atau belum

    $result = mysqli_query( $conn, "SELECT username FROM user WHERE username = '$username' ");
    
    
    if ( mysqli_fetch_assoc($result) ) {

        echo "<script>
                alert ('Username sudah terdaftar!');
                </script>";

            return false;
    }

    // cek konfirmasi password

    if ( $password !== $password2 ) {
        echo "<script>
                alert('password tidak sesuai!');
              </script>";

        return false;
    }

    // Enkripsi password
    // Teknik MD5 // $password = md5($password);


    $password = password_hash($password, PASSWORD_DEFAULT);
    



    // Tambahkan User baru ke Database

    mysqli_query( $conn, "INSERT INTO user VALUES('', '$username', '$password')" );

    return mysqli_affected_rows($conn);


}

?>