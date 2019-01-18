<?php 
require('connect.php');

if (isset($_POST["reset-reques-submit"])) {

	$selector =bin2hex(random_bytes(8));
	$token= random_bytes(32);

	$url = "http://localhost/CMS-DreamTeam/website/php/wachtwoord/wwvergetenpagina.php/selector=" .$selector . "&validator=" . bin2hex($token); 

	$expires = date("U") + 1800; 

}else{
	header("location:index.php")
}
	

