<?php
    require('../connect.php');

    		

   
    		//slaat de emails zien
    		//$emails = $conn->query("SELECT token, email FROM users")->fetchAll(PDO::FETCH_ASSOC);
			// print de emails maar je doet print_r omdat het een array is en als je echo doet krijg je een error die zegt array to string converstion ofzo!
			//print_r($emails);


if (isset( $_POST['password'] , $_POST['password_repeat'])){
	$password = $_POST['password'];
	$password_repeat = $_POST['password_repeat'];
	//$email = $_POST['email'];
	if($password === $password_repeat){

          $salted = "ladakwjdawdoi".$password."dsakdalsdawdaw";
          $hashed = hash('sha512', $salted);


		//$sql = 'UPDATE users SET password=$password WHERE email = $email';
		$sql = 'UPDATE users SET password=:password WHERE username = "'.$_POST['email'].'"';
		$query= $conn->prepare($sql);
		$query->bindParam(':password', $hashed, PDO::PARAM_STR);
		$query->execute();

		$success_massage = "password reset successfull!";
		header('refresh:3;../index.php');


		} else {
			$error_massage= "Password rest failed!";
		}
}

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

		<form method="post" action="wwvergetenpagina.php">

		<input class="formulierwachtwoordvergeten" type="email" name="email" placeholder="je email"
		value="<?php echo htmlspecialchars($_GET['email']); ?>"
		readonly>
		<br>
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