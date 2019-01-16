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
		<form>

  			<input class="formulieremail" type="email" placeholder="email" name="email" required>
  				<br />
 			<input class="loginknop " type="submit"  value ="send">
 			<input class="loginknop" type="button" onclick="location.href='./index.php';" value="login" />

		</form>


	</div>
</div>

<?php 


?>

</body>
</html>
