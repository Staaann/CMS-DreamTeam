<?php 
require('connect.php');

if (isset($_POST["reset-reques-submit"])) {

	$selector =bin2hex(random_bytes(8));
	$token= random_bytes(32);

	$url = "http://localhost/CMS-DreamTeam/website/php/wachtwoord/wwvergetenpagina.php/selector=" .$selector . "&validator=" . bin2hex($token); 

	$expires = date("U") + 1800; 

	$userEmail = $_POST["email"];

	$sql ="DELETE FORM wwReset WHERE wwResetEmail=";
	$stmt = mysqli_stmt_init()

}else{
	header("location:index.php")
}
	

