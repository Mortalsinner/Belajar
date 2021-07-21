<?php
$conn= mysqli_connect("localhost","root","","th3_carlo");

function query( $query ) {
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while ( $karyawan = mysqli_fetch_assoc($result) ) {
        $rows [] = $karyawan;
    }
    return $rows;
}


    // Karyawan
    function tambah1($data) {

        global $conn;

        $nip = ($data["nip"]);
        $nama = ($data["nama"]);
        $alamat = ($data["alamat"]);
        $kota = ($data["kota"]);
        $jk = ($data["jk"]);
        $kd_jabatan = ($data["kd_jabatan"]);
        $gol = ($data["gol"]);


        $query = "INSERT INTO  karyawan
                    VALUES
                    ('$nip','$nama','$alamat','$kota','$jk','$kd_jabatan','$gol')
                    ";

                    mysqli_query($conn,$query);

                    return mysqli_affected_rows($conn);
    }

  


    function edit($data) {

        global $conn;

        
        $nip =  $data["nip"];
        $nama = htmlspecialchars ($data["nama"]);
        $alamat =  htmlspecialchars($data["alamat"]);
        $kota =  htmlspecialchars($data["kota"]);
        $jk =  htmlspecialchars($data["jk"]);
        $kd_jabatan =  htmlspecialchars($data["kd_jabatan"]);
        $gol = ($data["gol"]);

        $query = "UPDATE karyawan SET 
                    nip = '$nip',
                    nama = '$nama',
                    alamat = '$alamat',
                    kota = '$kota',
                    jk = '$jk',
                    kd_jabatan = '$kd_jabatan',
                    gol = '$gol'
                    WHERE nip = $nip ";
    
    
    mysqli_query($conn, $query);

        
	return mysqli_affected_rows($conn);

    }
    
    function hapus1($nip){
        global $conn;
        mysqli_query($conn, "DELETE FROM karyawan WHERE nip=$nip");
        return mysqli_affected_rows($conn);
        
    }














    // Jabatan
    function tambahjabatan($data) {

        global $conn;

        $kd_jabatan = ($data["kd_jabatan"]);
        $nama_jabatan = ($data["nama_jabatan"]);
        $tunjangan = ($data["tunjangan"]);

        $query = "INSERT INTO jabatan
                    VALUES
                    ('$kd_jabatan','$nama_jabatan','$tunjangan')
                    ";

                    mysqli_query($conn,$query);

                    return mysqli_affected_rows($conn);
    }

    function hapus2($tunjangan) {

        global $conn;
        
       mysqli_query($conn, "DELETE FROM jabatan WHERE tunjangan = $tunjangan");
       return mysqli_affected_rows($conn);

    }


    function edit2($data) {

        global $conn;

        $kd_jabatan = htmlspecialchars ($data["kd_jabatan"]);
        $nama_jabatan = htmlspecialchars ($data["nama_jabatan"]);
        $tunjangan = htmlspecialchars ($data["tunjangan"]);       
        
        $query = "UPDATE jabatan SET
                    kd_jabatan = '$kd_jabatan',
                    nama_jabatan = '$nama_jabatan',
                    tunjangan = '$tunjangan' 
                    WHERE tunjangan = $tunjangan
                    ";

        mysqli_query($conn,$query);

        return mysqli_affected_rows($conn);
    }










    // GOLONGAN
    function tambah3($data) {

        global $conn;

        $gol = ($data["gol"]);
        $tj_keluarga = ($data["tj_keluarga"]);
        $tj_transportasi = ($data["tj_transportasi"]);
        $tj_makan = ($data["tj_makan"]);

        $query = "INSERT INTO golongan
                    VALUES 
                    ('$gol','$tj_keluarga','$tj_transportasi','$tj_makan')
                    ";

                    mysqli_query($conn,$query);

                    return mysqli_affected_rows($conn);
    }

    function edit3($data) {

        global $conn;

        $gol = $data["gol"];
        $tj_keluarga = htmlspecialchars($data["tj_keluarga"]);
        $tj_transportasi = htmlspecialchars($data["tj_transportasi"]);
        $tj_makan = htmlspecialchars($data["tj_makan"]);


        $query = "UPDATE golongan SET
                    gol = '$gol',
                    tj_keluarga = '$tj_keluarga',
                    tj_transportasi = '$tj_transportasi',
                    tj_makan = '$tj_makan'
                    WHERE gol = $gol ";

        mysqli_query($conn,$query);

        return mysqli_affected_rows($conn);

    }

    function hapus3($gol) {

        global $conn;
        mysqli_query($conn,"DELETE FROM golongan WHERE gol = $gol");
        return mysqli_affected_rows($conn);

    }











    // Login
    
function register($data){

	global $conn;

	$username  = strtolower(stripslashes($data["username"]));
	$password  = mysqli_real_escape_string($conn,$data["password"]);
	$password2 = mysqli_real_escape_string($conn,$data["password2"]);


	// cek username
	$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

	if(mysqli_fetch_assoc($result)){

		echo "username nya ganti lah";

	return false;

	}


	// komfir password?
	if($password !== $password2){

		echo "Username Is Taken!";

	return false;

	}

	// enkripsi
	$password = password_hash($password, PASSWORD_DEFAULT);

	// insert
	mysqli_query($conn,"INSERT INTO user VALUES ('','$username','$password') ");

	return mysqli_affected_rows($conn);

}
?>