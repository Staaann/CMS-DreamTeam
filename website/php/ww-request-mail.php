<?php
 require('connect.php');


?>

<!DOCTYPE html>
<html>

<head>
	<title> Wachtwoord vergeten!</title>
	<link rel="stylesheet" type="text/css" href="../css/CMScss.css">
</head>

<body>
	<div class="loginplekbg">
		<h1 class="h1">wachtwoord vergeten</h1>
	<div>
		<form action="php-ResetRequest.php" method="post">

  			<input class="formulieremail" type="email1" placeholder="email" name="email" required>
  				<br >
 			<input class="loginknop " type="submit" name="reset-reques-submit" value ="send">
 			<input class="loginknop" type="button" onclick="location.href='./index.php';" value="login" />

		</form>

	</div>
</div>

</body>
</html>
