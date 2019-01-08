<?php

			try{
				    $dbh = new pdo( 'mysql:host=localhost;dbname=cms v2.1',
				                    'root',
				                    '',
				                    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
				    echo "Hello world!";
				   or die(json_encode(array('outcome' => true)));

				}
						catch(PDOException $ex){
						    die(json_encode(array('outcome' => false, 'message' => 'Unable to connect')));
						    echo "test";
				}


					echo "Hello world!";

			/*  $db = new PDO('mysql:host=localhost;dbname=cms v2.1;charset=utf8mb4', 'root', '');

					 if ($con) {
					  echo 'connected';
					} else {
					  echo 'not connected';
					} */
?>