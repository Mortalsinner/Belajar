<?php

    require 'function.php';
    $sambung= query("SELECT * FROM jabatan");

?>



<html>
    <head>
    <title>Pendaftaran</title>
    <link rel= "stylesheet" href="design.css">
    </head>

   
</style>
    <body>
     
     



    

 <!-- Navigation -->
 <div id="mySidenav" class="sidenav">
    <a href="Javascript:void(0)" class="closebtn" onclick="closeNav()" style="color:white;">&times;
    </a>
    <a href="karyawan.php">&nbsp;Data Karyawan</a>
    <a href="jabatan.php" style="color:gray;">&nbsp;Data Jabatan</a>
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
  位置データ<br>Function DataJabatan()</p></center>
  <br><br>

  <center><button><a href="tambah2.php" style="color:white; text-decoration:none;">Tambah</a></button><br><br></center>
<center>
    <table border="1" width="20">
    <tr>
        <th>No</th>
        <th>Kode Jabatan</th>
        <th>Nama Jabatan</th>
        <th>Tunjangan</th>
        <th>Edit</th>
        <th>Delete</th>
        
    </tr>

        <?php $i = 1; ?>
        <?php foreach($sambung as $karyawan) :?>  
    
    <tr>
        <td><?php echo $i;?></td>
        <td><?php echo $karyawan["kd_jabatan"];?></td>
        <td><?php echo $karyawan["nama_jabatan"];?></td>
        <td><?php echo $karyawan["tunjangan"];?></td>
     


  
    <td><a href="edit2.php?tunjangan=<?php echo $karyawan["tunjangan"]; ?>" class="text-reset" style="color:white;">Edit</a></td>
    <td><a href="delete2.php?tunjangan=<?php echo $karyawan["tunjangan"]; ?>" class="text-reset"  style="color:white;">Delete</a></td>
    </tr>


            <?php $i++;?>
            <?php endforeach; ?>

    </table>
    
    </center>


    </body>