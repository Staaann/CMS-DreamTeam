<?php
 if (isset($_POST['email'])) {
 	require_once 'wwconnect.php';

  	$email = $conn-> real_escape_string($_POST['email']);

  	$sql = $conn->query(query, "SELECT id FROM users WHERE email='$email'");
  	if ($sql->num_rows > 0){

  		$token= "hdsajkaljdk12jndwadn298e";
		$token= str_shuffle($token);
		$token= substr($token, 0, 10 );

		$conn-> query(query,"UPDATE users SET token='$token', 
			tokenExpire=DATE_ADD (NOW(), INTERVAL 5 MINUTE)
			WHERE email='$email'
			")

  		
  	}
  	else
  	  exit(json_encode(array("status" => 0, "msg"=> 'Pleas check your inputs!')));	
  	
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
 			<br><br>
 			<p id="response"> </p> 
 			
		</form>

	</div>
</div>
			<script
 				 src="http://code.jquery.com/jquery-3.3.1.min.js" 
  				integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  				crossorigin="anonymous">
  				</script>

				<script type="text/javascript">
					var email = $("#email");

					$(document) .ready (function (){
						$('.loginknop').on ('click', function(){
							if(email.val() != "") {
								
								$.ajax({
									url:'ww-request-mail.php',
									method:'POST',
									dataType:'json',
									data: {
										email: email.val()
									}, success: function (response){
										if(response.success)
											$("#response").html (response.msg).css('color', "red");
										else
										$("#response").html (response.msg).css('color', "green");
									}
								})
							}else
								email.css('border', '1 px solid red' );
						});	
				});

</script>
</body>
</html>
