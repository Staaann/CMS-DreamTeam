<?php


 if (isset($_POST['email'])) {
 	require ('connect.php');


  	$email = $_POST['email'];
		$stmt = $conn->prepare("SELECT `email` FROM `users`");
        $stmt->execute(array($email) );
      


    	$stmt = $conn->prepare("SELECT COUNT(*) AS count FROM `users` WHERE email=?");
      $stmt->execute(array($email));
      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      $email_count = $row["count"];
       if ($email_count > 0) {


	  $token= "hdsajkaljdk12jndwadn298eTFG89";
		$token= str_shuffle($token);
		$token= substr($token, 0, 10);



		$conn-> query("UPDATE users SET token='$token'");	
		echo "Check you'er email inbox";


			date_default_timezone_set('Etc/UTC');

			require 'PHPMailer/PHPMailerAutoload.php';

			$mail = new PHPMailer;
			$mail->isSMTP();
			$mail->SMTPDebug = 0;
			$mail->Debugoutput = 'html';

		
			$mail->Host = 'smtp.gmail.com';
			
			$mail->Port = 587;
			$mail->SMTPSecure = 'tls';
			$mail->SMTPAuth = true;


			$mail->Username = "officialdreamteam26@gmail.com";


			$mail->Password = "jonathanisdeman";

			$mail->setFrom('officialdreamteam26@gmail.com', 'DreamTeam');

			$mail->addReplyTo('officialdreamteam26@gmail.com', 'Jonathan Tsegaye');

	
			$mail->addAddress($email);


			$mail->Subject = 'Change your password';


		$mail->msgHTML(file_get_contents('emailgebruiker.php'), dirname(__FILE__));



			if (!$mail->send()) {
			    echo "ERROR: " . $mail->ErrorInfo;
			} else {
			    echo " <br> Message sent!";

			}

		
					

	  }
  else{
  	echo"email doesn't exit!";
  	  }

    	}

} 


?>

<!DOCTYPE html>
<html>

<head>
	<title> Wachtwoord vergeten!</title>
	<link rel="stylesheet" type="text/css" href="../css/CMScss.css">
			

</script>
</head>

<body>
	<div class="loginplekbg">
		<h1 class="h1">Forgot Password<`n/h1>
	<div>
		<form action="" method="post">

  			<input class="formulieremail" id="email" type="email" placeholder="email" name="email" required>
  				<br >
 			<input class="loginknop" type="submit" name="reset-reques-submit" value ="send">
 			<br><br>
 			<a  class="Message" href ='index.php'>login</a>
 			
		</form>

	</div>
</div>

</body>
</html>
