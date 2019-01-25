<? php 
require('wwconnect.php');

if (isset($_POST["reset-ww-knop"])) {
	$selector = $_POST["selector"];
	$validator = $_POST["validator"];
	$password = $_POST["ww"];
	$passwordRepeat = $_POST["ww-repeat"];

	if(empty($password)|| empty($passwordRepeat)) {
		header("Location: register.php?newww=empty");
		exit();

	} else if ($password != $passwordRepeat ) {
		header("Location: register.php?newww=wwnotsame");
		exit();
	}

	$currentDate = date("U");

}else{
	header("Location: index.php")
}


?>