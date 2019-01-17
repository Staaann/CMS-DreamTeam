<?php

 require('connect.php');

				if (isset( $_POST['username'] , $_POST['password'] )){
				    $username = $_POST['username'];
				    $password = $_POST['password'];

				    //password hashing
				    $salted = "ladakwjdawdoi".$password."dsakdalsdawdaw";
                    $hashed = hash('sha512', $salted); 
				          		
				if(empty($username) || empty($password)) {
				    $messeg = "Username/Password can't be empty";
				    echo $messeg;
				} else {
				    $sql = "SELECT username, password FROM users WHERE username=? AND password=? ";
				    $query = $conn->prepare($sql);
				    $query->execute(array($username,$hashed));

				    if($query->rowCount() >= 1) {

				        header("location: WebsiteStefan.php");
				    } else {
				        $messeg = "Username/Password is wrong";
				        echo $messeg;
				    }
				}
				}

				            // $_SESSION["loggedin"] = true;
                           // $_SESSION["username"] = $username;

			       // $salted = "ladakwjdawdoi".$password."dsakdalsdawdaw";
                   // $hashed = hash('sha512', $salted); 
                   // echo $hashed;

				//check of gebruik bestaat
				//als de gebruiker bestaat anders geef error maak account aan
				//password hashen die is ingevuld 
				//passwords vergelijken				
				//als password niet match melding probeer password opnieuw


			

				

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

 
 						<form action="index.php" method="post">
  								<input class="formulierusername" type="text" placeholder="username" name="username"  >
  								<br>
  								<input class="formulierwachtwoord" type="password" placeholder="password" name="password" >
  								<br>
 								<input class="loginknop" type="submit" value ="login">
 								<br><br>
						</form>
						<br>
						<!--link naar registreren en naar wachtwoord vergeten -->
		<div>

				<a class="massage" href="register.php">Register</a>
				<br>
				<a class="massage" href="ww-request-mail.php">forgot password?</a>
		</div>


	</div>

</body>

</html>
