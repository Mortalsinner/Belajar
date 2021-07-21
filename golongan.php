<?php

    require 'function.php';
    $sambung = query("SELECT * FROM golongan");


?>

<html>
<head>
<title>Result Golongan</title>
<link rel= "stylesheet" href="design.css">
</head>

<body>
    
  
    


     

 <!-- Navigation -->
 <div id="mySidenav" class="sidenav">
    <a href="Javascript:void(0)" class="closebtn" onclick="closeNav()" style="color:white;">&times;
    </a>
    <a href="karyawan.php">&nbsp;Data Karyawan</a>
    <a href="jabatan.php">&nbsp;Data Jabatan</a>
    <a href="golongan.php" style="color:gray;">&nbsp;Data golongan</a>
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
  グループデータ<br>Function DataGolongan()</p></center>
  <br><br>

  
  <center><button><a href="tambah3.php" style="color:white; text-decoration:none;">Tambah</a></button><br><br></center>
    <center>
        <table border="1" width="20">

        <tr>
            <th>No</th>
            <th>Golongan</th>
            <th>Tunjangan Keluarga</th>
            <th>Tunjangan Transportasi</th>
            <th>Tunjangan Makan</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($sambung as $karyawan) : ?>

        <tr>
            <td><?php echo $i;?></td>
            <td><?php echo $karyawan["gol"]; ?></td>
            <td><?php echo $karyawan["tj_keluarga"]; ?></td>
            <td><?php echo $karyawan["tj_transportasi"]; ?></td>
            <td><?php echo $karyawan["tj_makan"]; ?></td>


            <td><a href="edit3.php?gol=<?php echo $karyawan['gol']; ?> " style="color:white;">Edit</a></td>
            <td><a href="delete3.php?gol=<?php echo $karyawan['gol']; ?> "  style="color:white;">Delete</a></td>
        </tr>

            <?php $i++; ?>
            <?php endforeach; ?>

        </table>
        
    
    <br><br>

    </center>
</body>
</html>