<?php

    require 'function.php';
    $sambung= query("SELECT * FROM karyawan");

?>



<html>
    <head>
    <title>Pendaftaran</title>
    <link rel= "stylesheet" href="design.css">
    </head>

   
    <body>
        
   
  
    


     

 <!-- Navigation -->
 <div id="mySidenav" class="sidenav">
    <a href="Javascript:void(0)" class="closebtn" onclick="closeNav()" style="color:white;">&times;
    </a>
    <a href="karyawan.php" style="color:gray;">&nbsp;Data Karyawan</a>
    <a href="jabatan.php">&nbsp;Data Jabatan</a>
    <a href="golongan.php">&nbsp;Data golongan</a>
  </div>
  <span style=" margin-left: 20px;
   font-size: 30px; color: black;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  cursor: pointer;" onclick="openNav()">M&#9776;NU
  </span>
  <br><br><br><br>

  <script>
    function openNav(){
      document.getElementById("mySidenav").style.width ="250px";
    }
    function closeNav(){
      document.getElementById("mySidenav").style.width= "0";
    }
  </script>






<center><img src="image/logobaru.jpg" alt="" style="height: 35px; width: 35px; margin-top:1cm;"></center>








    <center><p 
  style="color: black; 
  padding: 20px; 
  background-color:white; 
  border-radius:50px;
  font-size:20px;
  width:50%;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  "> 
  スタッフデータ<br>Function DataKaryawan()</p></center>
  <br><br>

  

    <center><button><a href="tambah.php" style="color:white; text-decoration:none;">Tambah</a></button><br><br></center>
    <center>
    <table border="1" width="20">
    <tr>
        <th>No</th>
        <th>Nip</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Kota</th>
        <th>Jenis Kelamin</th>
        <th>Kode Jabatan</th>
        <th>Golongan</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>

        <?php $i = 1; ?>
        <?php foreach($sambung as $karyawan) :?>  
    
    <tr>
        <td><?php echo $i;?></td>
        <td><?php echo $karyawan["nip"];?></td>
        <td><?php echo $karyawan["nama"];?></td>
        <td><?php echo $karyawan["alamat"];?></td>
        <td><?php echo $karyawan["kota"];?></td>
        <td><?php echo $karyawan["jk"];?></td>
        <td><?php echo $karyawan["kd_jabatan"];?></td>
        <td><?php echo $karyawan["gol"];?></td>

  
    <td><a href="edit1.php?nip=<?php echo $karyawan["nip"]; ?>" class="text-reset"  style="color:white;">Edit</a></td>
    <td><a href="delete1.php?nip=<?php echo $karyawan["nip"]; ?>" class="text-reset"  style="color:white;">Delete</a></td>
    </tr>


            <?php $i++;?>
            <?php endforeach; ?>

    </table>
    
    </center>

   
    
    
    

    </body>