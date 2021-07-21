<?php 

    require 'function.php'; 

    if ( isset($_POST["submit"])) {
        
        if ( tambahjabatan($_POST) > 0) {
            echo "
                <script>
                    alert('data berhasil ditambahakan!');
                    document.location.href ='jabatan.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('data gagal ditambahakan!');
                    document.location.href ='tambah2.php';
                </script>
            ";
        }

    }

 ?>

<!DOCTYPE html>
<html>
    <head>
        <title>FORMULIR PENDAFTARAN</title>
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
        <center><h1>Penambahan Data Jabatan</h1></center>
        </div>


        <center>
        <form action="" method="post">
        <ul>  
            
              <!-- Kd_jabatan : input : $kd_jabatan  -->
              <label for="kd_jabatan">Kode Jabatan :</label><br>
              <input type="text" name="kd_jabatan" id="kd_jabatan" required><br>



              <!-- Nama_jabatan : input : $nj -->
              <label for="nama_jabatan">Nama Jabatan :</label><br>
              <input type="text" name="nama_jabatan" id="nama_jabatan" required><br>




              <!-- Tunjangan : input : $tunjangan --> 
              <label for="tunjangan">Tunjangan :</label><br>
              <input type="text" name="tunjangan" id="tunjangan" required><br><br>
            
              <button type="submit" name="submit" onclick="return confirm('apakah data anda sudah Lengkap?')">Tambah Data!</button>
              
        </ul>
            
        </form>
        </center>

    </body>
    </html>