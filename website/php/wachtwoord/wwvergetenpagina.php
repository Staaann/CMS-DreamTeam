<?php
    require('../connect.php');
    		

	$password = $_POST['password'];
	$password_repeat = $_POST['password_repeat'];

	if($password === $password_repeat){
		
          $salted = "ladakwjdawdoi".$password."dsakdalsdawdaw";
          $hashed = hash('sha512', $salted);



		$query= $conn->prepare($sql);
		$sql = 'UPDATE users SET password=$password WHERE email =$emailuser ';

		$query->bindParam(':password', $hashed, PDO::PARAM_STR);
		$query->execute();

		$success_massage = "password reset successfull!";
		header('refresh:3; url: ../index.php');


		} else {
			$error_massage= "Password rest failed!";
		}

	}else {
		$error_massage= "Password doesn't match";
	}}

?>


<!DOCTYPE html>
<html>
<head>
	<title>new password</title>
	<link rel="stylesheet" type="text/css" href="cssnieuweww.css">
</head>
<body>

	
	<div class="grijzevlakte">

		<h1 class="h1">Make a new password</h1>

		<form>

		<input class="formulierwachtwoordvergeten" type="password" name="password" placeholder="new password" required>
		<br>
		<input class="formulierwachtwoordvergeten" type="password" name="password_repeat" placeholder="repeat password"
		 required>
		<br>
		<input class="confirmknop " id="confirm" name="confirm" type="submit"  value ="confirm">

		</form>

	</div>


</body>
</html>