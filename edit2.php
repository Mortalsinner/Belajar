<?php

include "function.php";

$tunjangan = $_GET["tunjangan"];

$tabel = "SELECT *FROM jabatan WHERE tunjangan = $tunjangan";

$perintah = mysqli_query($conn,$tabel);

$karyawan = mysqli_fetch_array($perintah);

if(isset($_POST["submit"]) ) {

    if(edit2($_POST) > 0) {
        echo "
        <script>
        alert('Data berhasil diubah!');
        document.location.href= 'jabatan.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data gagal diubah!);
        document.location.href='edit2.php';
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit data Jabatan</title>
</head>

<style>
        body{
        background-color:lightgray;
    }
    h1{
        padding:20px;
        color:white;
        background-color:black;
        border-radius:50px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    form{
        padding:20px;
        background-color:white;
        border-radius: 50px;
    }
    input{
        width:12cm;
        height:1.5cm;
        background-color:lightgray;
        border:0px;
        border-radius:25px;
    }
    select{
        width:12cm;
        height:1.5cm;
        background-color:lightgray;
        border:0px;
        border-radius:25px;
    }
    button{
        border-radius:25px;
        border:0;
        background-color:blue;
        color:white;
        height:50px;
        width:100px;
    }
    button:hover{
    box-shadow: 0 40px 20px 0 rgba(14, 94, 223, 0.2);
    cursor: pointer;
    }
    label{
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    textarea{
        width:12cm;
        height:1.5cm;
        background-color:lightgray;
        border: 0px;
        border-radius:25px;
    }
    </style>

<body>
    

    <div class="header">
    <center><h1>Edit Data Jabatan</h1></center>
    </div>

    <center>
    <form action="" method="post">
    
    <ul>
    <!--kd_jabatan : $kd_jabatan -->
    <label for="gol">Kode Jabatan :</label><br>
    <input type="text" name="kd_jabatan" id="kd_jabatan" value="<?php echo $karyawan['kd_jabatan']; ?>"><br>


    
    <!-- nama_jabatan : nama_jabatan -->
    <label for="nama_jabatan">Nama Jabatan :</label><br>
    <input type="text" name="nama_jabatan" id="nama_jabtan" value="<?php echo $karyawan['nama_jabatan']; ?>"><br>



    <!-- tunjangan -->
    <label for="tunjangan">Tunjangan :</label><br>
    <input type="text" name="tunjangan" id="tunjangan" value="<?php echo $karyawan['tunjangan']; ?>"><br><br>


    <button type="submit" name="submit" onclick="return confirm('apakah Update data anda sudah lengkap ?')">Update Data!</button>

    </ul>


    </form>
    </center>
</body>

</html>