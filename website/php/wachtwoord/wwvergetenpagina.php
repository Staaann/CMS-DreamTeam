<?php
    require('connect.php');

    sql = $conn->query("SELECT id FROM users WHERE email='$email'");

            if (isset( $_POST['password'] , $_POST['password_repeat'])){

          $newpassword = $_POST['password'];
          $newpassword_repeat = $_POST['password_repeat'];

          $conn-> query( "UPDATE users SET newpassword='$password'" );


);


}else{
	stuurnaardeloginpagina();
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

		<form>

		<input class="formulierwachtwoordvergeten" type="password" name="password" placeholder="new password" required>
		<br>
		<input class="formulierwachtwoordvergeten" type="password" name="password" placeholder="repeat password"
		 required>
		<br>
		<input class="confirmknop " type="submit"  value ="confirm">
		
		</form>

	</div>


</body>
</html>