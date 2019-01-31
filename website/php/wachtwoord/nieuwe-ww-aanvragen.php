<!DOCTYPE html>
<html>
<head>
	<title>new password</title>
	<link rel="stylesheet" type="text/css" href="cssnieuweww.css">
</head>
<body>

	
	<div class="loginplekbg">

		<h1 class="h1">Make a new password</h1>

			<?php
				$selector = $_GET["selector"]; 
				$validator = $_GET["validator"];

				if(empty($selector)|| empty($validator)){
					echo "Could not validator your request!";
				} else{
					if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false ) {
						
					}
				}
			?>

			<form action="php-checkt-ww.php" method="post">
				<input type="hidden" name="selector" value="<?php echo $selector ?>">
				<input type="hidden" name="validator" value="<?php echo $validator ?>">

				<input class="formulierwachtwoord" type="password" name="ww" placeholder="new password" required>
				<br>
				<input class="formulierwachtwoord" type="password" name="ww-repeat" placeholder="repeat password"
		 			required>
				<br>
				<input class="loginknop " name="reset-ww-knop" type="submit"  value ="confirm">

			</form>
		

	</div>


</body>
</html>