<?php 
		require('connect.php');
		$pages = $conn->query("SELECT id, tekst FROM blog")->fetchAll(PDO::FETCH_ASSOC);	


		foreach($pages as $page){
		$pages	$page['id'];	

		}








?>