<?php
	session_start();
				try {
				    $conn = new PDO("mysql:host=localhost;dbname=cms2",'root','');

				    // set the PDO error mode to exception

				    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				    echo "";
				    }
				catch(PDOException $e)
				    {
				    echo "Connection failed: " . $e->getMessage();
				    }
						//simon
					//	$_SESSION['username'] = $username;
?>
