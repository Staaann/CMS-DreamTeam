<?php 
require('wwconnect.php');

// dit is php/mysqli voor wachtwoord veranderen
//jonathan

if (isset($_POST["reset-request-submit"])) {

	$selector =bin2hex(random_bytes(8));
	$token= random_bytes(32);

	$url = "http://localhost/CMS-DreamTeam/website/php/wachtwoord/wwvergetenpagina.php/selector=" .$selector . "&validator=" . bin2hex($token); 

	$expires = date("U") + 1800; 

	$userEmail = $_POST["email"];



// dit zorgt ervoor dat je de link maar 1 keer kan gebruiken  
	$sql ="DELETE FORM wwReset WHERE wwResetEmail=?";
	$stmt = mysqli_stmt_in+t($conn);
	if (!mysli_stmt_prepare($stmt, $sql)) {
			echo "there was an error!";
			exit();
		}	else{
			mysqli_stmt_bind_param($stmt, "s", $userEmail);
			mysqli_stmt_execute($stmt);
		}

		$sql =	"INSERT INTO wwReset(wwResetEmail, wwResetSelector, wwResetToken, wwResetExpires) Values (?,?,?,?);";

		$stmt = mysqli_stmt_init($conn);
	if (!mysli_stmt_prepare($stmt, $sql)) {
			echo "there was an error!";
			exit();
//Hier hash ik de token 
		}	else{
			$hashedToken =password_hash($token, PASSWORD_DEFAULT);
			mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashedToken, $expires);
			mysqli_stmt_execute($stmt);
		}

		mysqli_stmt_close($stmt);
		mysqli_connect();
//Hier eidigt de database gedeelte 


//Hier onder begin ik met de email gedeelte

//($to,$subject,$message) naar wie , onderwerp, tekst,
		$to = $userEmail; 

		$subject = 'Wachtwoord veranderen voor Dreamteam';

		$message ='<p>U hebt een nieuw wachtwoord aangevraagd voor Dreamteam.<br>
		Hieronder vind u een link om uw wachtwoord te veranderen. <br><br>
		!!LET OP DEZE LINK WERKT, MAAR 1 KEER EN VOOR MAAR 2 UREN <br>
		Hier is uw wachtwoord reset link:  ';

<<<<<<< HEAD
		$message.= '<a href=" ' .$url '  ' .url .' > </a> </p>';
=======

// Parse error: syntax error, unexpected ''">'' (T_CONSTANT_ENCAPSED_STRING) in C:\xampp\htdocs\CMS-DreamTeam\website\php\php-ResetRequest.php on line 61
	
		$message.= '<a herf="'.url . '">' .url . '</a></p>';
>>>>>>> 3720ac30d617a952099ef75b9b29cd442f9e3062

		$hearders ="From: Dreamteam <officialdreamteam26@gamil.com>\r\n";
		$hearders .= "Reply-To: officialdreamteam26@gamil.com\r\n";
		$hearders .= "Conect-type: text/html\r\n";

		mail($to, $subject, $message, $hearders);

		hearder("location: ww-request-mail.php? reset=succes");
		




}else{
	header("location:index.php")
}
	

+