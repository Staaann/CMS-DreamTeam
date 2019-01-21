  <?php

 	require('connect.php');
 				//pak de data van het formulier
				if (isset( $_POST['username'] , $_POST['password'] ))
				{
				    $username = $_POST['username'];
				    $password = $_POST['password'];
            //simon
            $_SESSION['username'] = $username;

				    //password hashing
				    $salted = "ladakwjdawdoi".$password."dsakdalsdawdaw";
                    $hashed = hash('sha512', $salted);
                //check if the username and password is empty
				if(empty($username) || empty($password)) {
				    $messeg = "Username/Password can't be empty";
				    echo $messeg;
				    //pak de data van de database en vergelijk het
				} else {
				    $sql = "SELECT username, password FROM users WHERE username=? AND password=? ";
				    $query = $conn->prepare($sql);
				    $query->execute(array($username,$hashed));
				    //pak de data
				    if($query->rowCount() >= 1) {

				        header("location: WebsiteStefan.php");
				    //als het fout is geef de errror
				    } else {
				        $messeg = "Username/Password is wrong";
				        echo $messeg;
				    }
				}

				}

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
