<?php

    require 'function.php';

    if(isset($_POST["submit"]) ) {

        if(tambah3($_POST) > 0) {
            echo "
            <script>
                alert('Data berhasil ditambahkan!');
                document.location.href = 'golongan.php';
            </script>";
        } else {
            echo "
            <script>
                alert('Data gagal ditambahkan!);
                document.location.href = 'tambah3.php';
                </script>";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
<title>Tambah data Golongan</title>
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
    <center><h1>Form Golongan</h1></center>
    </div>

    <center>
    <form action="" method="post">
    
    <ul>
    
        <!--gol : input :$gol  -->
        <label for="gol">Golongan :</label><br>
        <input type="text" name="gol" id="gol" required><br>


        <!-- tj_keluarga : input : $tj_keluarga -->
        <label for="tj_keluarga">Tunjangan Keluarga :</label><br>
        <input type="text" name="tj_keluarga" id="tj_kelaurga" required><br>


        <!-- tj_transportasi : input : $tj_tranportasi -->
        <label for="tj_transportasi">Tunjangan Transportasi :</label><br>
        <input type="text" name="tj_transportasi" id="tj_transportasi" required><br>



        <!-- tj_makan : input : $tj_makan -->
        <label for="tj_makan">Tunjangan Makan :</label><br>
        <input type="text" name="tj_makan" id="tj_makan" required><br><br>
    
        <button type="submit" name="submit" onclick="return confirm('apakah data and sudah lengkap ?') ">Tambah Data!</button>

    </ul>

    </form>
    </center>

</body>
</html>