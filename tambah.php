<?php

    require 'function.php';

    if (isset($_POST["submit"])) {

        if( tambah1 ($_POST) > 0) {
            echo "
                <script>
                    alert('data berhasil ditambahakan!');
                    document.location.href ='karyawan.php';
                </script>
            ";
         } 
        else{
            echo "
                <script>
                    alert('data gagal ditambahakan!');
                    document.location.href ='tambah.php';
                </script>
            ";
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Penambahan Data Karyawan</title>


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
    </head>
    <body>
        
        <div  class="header">
        <center><h1>Form Karyawan</h1></center>
        </div>

        <center>
        <form action="" method="post" autocomplete="off">
            <ul>
            <!-- Nip : input : $nip  -->
                <label for="nip">NIP :</label><br>
                <input type="text" name="nip" id="nip" required><br>



            <!-- Nama : input : $nama -->
                <label for="nama">Nama :</label><br>
                <input type="text" name="nama" id="nama" required><br>



            <!-- Alamat : textarea : $alamat --> 
            <label for="alamat">Alamat :</label><br>
            <textarea name="alamat" id="alamat" cols="30" rows="10"></textarea><br>



            <!-- kota : textarea : $kota -->
            <label for="kota">Kota :</label><br>
            <select name="kota" id="kota">
            <option value=""></option>
            <option value="Jakarta">Jakarta</option>
            <option value="Bandung">Bandung</option>
            <option value="Semarang">Semarang</option>
            <option value="Denpasar">Denpasar</option>
            </select><br><br>


            <!-- JK : select : $jk -->
            <label for="jk">Jenis Kelamin</label><br>
            <select name="jk" id="jk">
            <option value=""></option>
            <option value="P">P</option>
            <option value="L">L</option>
            </select><br><br>



            <!-- kd_jabatan : select : $jabatan -->
            <label for="kd_jabatan">Jabatan :</label><br>
            <select name="kd_jabatan" id="kd_jabatan"><br>
            
            <?php

                    $sql = "SELECT * FROM jabatan";
                    $query = mysqli_query($conn, $sql);
                    while($data = mysqli_fetch_array($query)){
                    ?>
                    <option value='<?php echo $data['kd_jabatan']; ?>' > <?php echo
                    $data['nama_jabatan']; ?></option>
                    <?php
                    }
                     ?>

            
            </select>
            <br><br>


            
            <!-- gol : select : $gol -->
            <label for="gol">Golongan :</label><br>
            <select name="gol" id="gol"><br>
            
            <?php

                    $sql = "SELECT * FROM golongan";
                    $query = mysqli_query($conn, $sql);
                    while($data = mysqli_fetch_array($query)){
                    ?>
                    <option value='<?php echo $data['gol']; ?>' > <?php echo
                    $data['gol']; ?></option>
                    <?php
                    }
                     ?>

            
            </select>
            <br><br>


            <button type="submit" name="submit" onclick="return confirm('apakah data anda sudah Lengkap?')">Tambah Data!</button>

            </ul>
        </form>
        </center>
    </body>
    </html>