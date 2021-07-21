

<?php

include "function.php";

  if (isset($_POST["register"])) {
	
  	if(register($_POST) > 0){

  		header('Location:login.php');

  	}else{

  		// echo " error deh ";
  		echo mysqli_error($conn);

  	}



} ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>

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
		margin-right:100px;
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
			<h1>Register</h1>
        <form action="" method="post">


        <ul>
 			<label for="username">Username :</label><br>
 			<input type="text" name="username" id="username" required><br>
		

		
 			<label for="password">Password :</label><br>
 			<input type="password" name="password" id="password" required>
		

		
 			<label for="password2">Confirm Password :</label><br>
 			<input type="password" name="password2" id="password2" required><br><br>
		

	

		
 			<label for="register"></label>
 			<button type="submit" name="register">REGISTER</button>
		



             </ul>
        </form>
</form>




</body>
</html>