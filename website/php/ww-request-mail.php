<?php
 if (isset($_POST['email'])) {
 	require_once 'wwconnect.php';

  	$email = $conn-> real_escape_string($_POST['email']);

  	$sql = $conn->query(query, "SELECT id FROM users WHERE email='$email'");
  	if ($sql->num_rows > 0){

  	}else
  	  exit(json_decode(array("status" => 0, "msg"=> 'Pleas check your inputs!')));	
 }


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

  			<input class="formulieremail" id="email" type="email" placeholder="email" name="email" required>
  				<br >
 			<input class="loginknop" type="submit" name="reset-reques-submit" value ="send">
 			
		</form>

	</div>
</div>

</body>
</html>
