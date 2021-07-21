<?php 


session_start();

include "function.php";

// cek cookie

if (isset($_COOKIE['id']) && isset($_COOKIE['key']) ) {

	$id = $_COOKIE['id'];
	$key = $_COOKIE['key'];

	// ambil username berdasarkan id

	$result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id");

	$row = mysqli_fetch_assoc($result);


	// cek cookie dan username

	if ($key === hash('sha256', $row['username'])) {
		$_SESSION['login'] = true;
	}
}

	if (isset($_SESSION["login"]) ) {
		header("Location: karyawan.php");
		exit;
	}




  if (isset($_POST["login"])) {

  	$username = $_POST["username"];
  	$password = $_POST["password"];

  	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

  	// cek username
  	if (mysqli_num_rows($result) === 1 ) {
  		
  		// cek password
  		$row = mysqli_fetch_assoc($result);

  		if (password_verify($password, $row["password"]) ) {

  			// set sesssion
  			$_SESSION["login"] = true;

  			// cek remember me
  			if (isset($_POST['ingat'])) {
  				
  				// buatcookie
  				setcookie('id', $row['id'],time()+60);
  				setcookie('key',hash('sha256', $row['username']),time()+60);
  			}



  				header("Location: karyawan.php");
  				exit;
  		}

  	}
 
  	echo "<script>
	  alert('Invalid Username/password!');
	  </script>
	  ";

}

 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Login Site</title>
	
	<style>
	body
	{
		background-color:white;
	}
	h1{
		padding:20px;
		color:black;
		font-family:tahoma;
		border:1px solid black;
		border-radius:50px;
	}
	input{
		background-color:white;
		border:0px;
		border-radius:50px;
		margin-right:50px;
	}
	label{
		margin-right:40px;
	}
	button{
		border:0px;
		border-radius:50px;
		background-color:white;
		color:black;
		margin-right:25px;
	}
	form{
		margin-top:3cm;
		padding:5px;
		background-color:black;
		color:white;
		border-radius:50px;
		width:250px;
		margin-left:5px;
	}
	</style>

</head>
<body>

	



	<center>

	  <h1>LOGIN</h1>



		<form action="" method="post">
	
		<ul>

		<!-- Username -->
		 			<label for="username">Username :</label><br>
		 			<input type="text" name="username" id="username" required><br>
		
		<!-- Password -->
		 			<label for="password">Password :</label><br>
		 			<input type="password" name="password" id="password" required><br><br>
					 
		<!-- Login Button -->
		 			<label for="login"></label><br>
		 			<button type="submit" name="login">LOGIN</button>


                    <button type="button" name="register"><a href='register.php?'style="text-decoration:none; color:black;">REGISTER</a></button>
		 			
		 			


			</ul>
		 </form>

		 
	</center>

</form>

</body>
</html>