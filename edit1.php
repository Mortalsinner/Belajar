<?php 


include "function.php";



$id =$_GET["nip"];



$tabel=" SELECT * FROM karyawan WHERE nip = $id";

$perintah = mysqli_query($conn,$tabel);

$karyawan =mysqli_fetch_array($perintah);



if(isset($_POST["submit"]) ){

  if (edit($_POST) > 0 ) {
    echo "
    <script>
     alert('Data Berhasil Diubah!');
     document.location.href= 'karyawan.php';
     </script>
    ";
  } else{
    echo "
    <script>
    alert('Data Gagal untuk Diubah!');
    document.location.href= 'edit1.php';
    </script>
    ";
  }

}
 ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Edit data Karyawan</title>
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
        <center><h1>Edit Data karyawan</h1></center>
        </div>
        <center>
        <form action="" method="post">
        
        <ul>
        <!-- Nip : input : $nip  -->
        <label for="nip">Nip :</label><br>
		<input type="text" name="nip" id="nip"  value="<?php echo $karyawan['nip']; ?>"><br>
				

        <!-- Nama : input : $nama -->
        <label for="nama">Nama :</label><br>
		<input type="text" name="nama" id="nama" value="<?php echo $karyawan['nama']; ?>"><br>
				


        <!-- Alamat : textarea : $alamat --> 
        <label for="alamat">Alamat :</label><br>
		<input type="text" name="alamat" id="alamat" value="<?php echo $karyawan['alamat']; ?>"><br>
			



        <!-- kota : textarea : $kota -->
        <label for="kota" >kota</label><br>
					<select name="kota" id="kota" required >
						<option value=""></option>
						<option <?php if (isset($kota) && $kota=="Jakarta") echo "checked";?> value="Jakarta">Jakarta</option>
						<option <?php if (isset($kota) && $kota=="Bandung") echo "checked";?> value="Bandung">Bandung</option>
						<option <?php if (isset($kota) && $kota=="semarang") echo "checked";?> value="semarang">Semarang</option>
						<option <?php if (isset($kota) && $kota=="denpasar") echo "checked";?> value="Denpasar">Denpasar</option>
					</select>	<br>


        <!-- JK : select : $jk -->
        <label for="jk">Jenis Kelamin</label><br>
            <select name="jk" id="jk">
            <option value=""></option>
            <option <?php if (isset($jk) && $jk=="perempuan") echo "checked";?> value="Perempuan">P</option>
            <option <?php if (isset($jk) && $jk=="pria") echo "checked";?> value="Laki-Laki">L</option>
            </select><br><br>


        <!-- kd_jabatan : select : $jabatan -->
        <label for="kd_jabatan" class="form-label">Kode Jabatan</label><br>
					<select name="kd_jabatan" value ="<?php echo $karyawan["kd_jabatan"]; ?>">
 				      
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

                        
					</select><br><br>

            <!-- gol : select : $gol -->
            <label for="kd_jabatan" class="form-label">Golongan</label><br>
					<select name="gol" value ="<?php echo $karyawan["gol"]; ?>">
 				      
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


					</select><br><br>

                    <button type="submit" name="submit" onclick="return confirm('apakah Update data anda sudah Lengkap?')">Update data!</button>

        </ul>


        </form>
        </center>


    </body>
    </html>