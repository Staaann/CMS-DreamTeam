<?php

 require('connect.php');

$stmt = $conn->query("SELECT * FROM users");
$user = $stmt->fetch();
var_dump($user);
?>






<!DOCTYPE html>
<html>

<head>
		<link rel="stylesheet" type="text/css" href="../css/CMScss.css">
		<title>
			DreamTeam
		</title>
</head>

<body>
 	<div class="loginplekbg">
 				<h1 class="h1">login</h1>

 						<!--login formulier-->
 						<form action="/action_page.php">

  								<input class="formulierusername" type="text" placeholder="username" name="username" required >
  								<br>
  								<input class="formulierwachtwoord" type="password" placeholder="password" name="password" required>
  								<br>
 								<input class="loginknop" type="submit" value ="login">
 								<br><br>


						</form>
						<br>
						<!--link naar registreren en naar wachtwoord vergeten -->
		<div>

				<a class="massage" href="register.php">Register</a>
				<br>
				<a class="massage" href="wachtwoord.php">forgot password?</a>
		</div>


	</div>

</body>

</html>
