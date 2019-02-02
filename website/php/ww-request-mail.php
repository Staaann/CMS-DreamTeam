<?php

 if (isset($_POST['email'])) {
 	require ('connect.php');

  	$email = $_POST['email'];
		$stmt = $conn->prepare("SELECT `email` FROM `users`");
        $stmt->execute(array($email) );
      
       //while ($rows = $stmt->fetch(PDO::FETCH_ASSOC)) {
         //print_r( $rows);
       //}
        /*var_dump($email);
    	$email = $rows;
		$stmt = $conn->prepare("SELECT * FROM users WHERE email=?");
		$stmt->execute([$email]); 
		$user = $stmt->fetch();
		if ($user) {
    	echo "email bestaat"; 
		} else {
    	echo "email bestaat niet"; */

    	$stmt = $conn->prepare("SELECT COUNT(*) AS count FROM `users` WHERE email=?");
      $stmt->execute(array($email));
      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      $email_count = $row["count"];
       if ($email_count > 0) {


	  $token= "hdsajkaljdk12jndwadn298eTFG89";
		$token= str_shuffle($token);
		$token= substr($token, 0, 10 );



		$conn-> query("UPDATE users SET token='$token'");	
		echo "Check you'er email inbox";


		

	  }
  else{
  	echo"email doesn't exit!";
  	  }

    	}

} 

  /*	if ($sql->num_rows > 0){

  		$token= "hdsajkaljdk12jndwadn298e";
		$token= str_shuffle($token);
		$token= substr($token, 0, 10 );

		$conn-> query(query,"UPDATE users SET token='$token', 
			tokenExpire=DATE_ADD (NOW(), INTERVAL 5 MINUTE)
			WHERE email='$email'
			");	

00  		
  	}
  	else
  	  exit(json_encode(array("status" => 0, "msg"=> 'Pleas check your inputs!')));	
  	
 }*/


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
		<h1 class="h1">wachtwoord vergeten</h1>
	<div>
		<form action="" method="post">

  			<input class="formulieremail" id="email" type="email" placeholder="email" name="email" required>
  				<br >
 			<input class="loginknop" type="submit" name="reset-reques-submit" value ="send">
 			<br><br>
 			<p id="response"> </p> 
 			
		</form>

	</div>
</div>

</body>
</html>
