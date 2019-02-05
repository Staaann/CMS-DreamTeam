<?php
function maaknieuwestring($len =10){

		$token= "hdsajkaljdk12jndwadn298eTFG89";
		$token= str_shuffle($token);
		$token= substr($token, 0, $len);

		return $token;

	}


function stuurnaardeloginpagina (){
	header('index.php');
	exit();
}
