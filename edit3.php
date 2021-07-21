<?php

include "function.php";

$gol = $_GET["gol"];

$tabel = "SELECT *FROM golongan WHERE gol = $gol";

$perintah = mysqli_query($conn,$tabel);

$karyawan = mysqli_fetch_array($perintah);

if(isset($_POST["submit"]) ) {

    if(edit3($_POST) > 0) {
        echo "
        <script>
        alert('Data berhasil diubah!');
        document.location.href= 'golongan.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data gagal diubah!);
        document.location.href='edit3.php';
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit data Golongan</title>
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
    <center><h1>Edit Data Golongan</h1></center>
    </div>

    <center>
    <form action="" method="post">
    
    <ul>
    <!--gol : $gol  -->
    <label for="gol">Golongan :</label><br>
    <input type="text" name="gol" id="gol" value="<?php echo $karyawan['gol']; ?>"><br>


    
    <!-- tj_keluarga : $tj_keluarga -->
    <label for="tj_keluarga">Tunjangan Keluarga :</label><br>
    <input type="text" name="tj_keluarga" id="tj_kelaurga" value="<?php echo $karyawan['tj_keluarga']; ?>"><br>



    <!-- tj_transportasi : $tj_tranportasi -->
    <label for="tj_transportasi">Tunjangan Transportasi :</label><br>
    <input type="text" name="tj_transportasi" id="tj_transportasi" value="<?php echo $karyawan['tj_transportasi']; ?>"><br>



    <!-- tj_makan : $tj_makan -->
    <label for="tj_makan">Tunjangan Makan :</label><br>
    <input type="text"  name="tj_makan" id="tj_makan" value="<?php echo $karyawan['tj_makan']; ?>"><br><br>


    <button type="submit" name="submit" onclick="return confirm('apakah Update data anda sudah lengkap ?')">Update Data!</button>

    </ul>


    </form>
    </center>
</body>

</html>