<?php
    require('../connect.php');



if (isset( $_POST['password'] , $_POST['password_repeat'])){
	$password = $_POST['password'];
	$password_repeat = $_POST['password_repeat'];
	//$email = $_POST['email'];
	if($password === $password_repeat){



		//$sql = 'UPDATE users SET password=$password WHERE email = $email';
		$salted = "ladakwjdawdoi".$password."dsakdalsdawdaw";
		$hashed = hash('sha512', $salted);

			$sql = 'UPDATE users SET password=:password WHERE email = "'.$_POST['email'].'"';
			$query= $conn->prepare($sql);
			$query->bindParam(':password', $hashed, PDO::PARAM_STR);
			$query->execute();

			echo "<script>
			alert('Password Updated');
			</script>";

		header('refresh:0;../index.php');


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
		value="<?php echo htmlspecialchars($_GET['email']); ?>"readonly>

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
