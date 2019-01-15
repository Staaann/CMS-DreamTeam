<?php

			$servername = "127.0.0.1";
			$username = "";
			$password = "root";
	
				try {
				    $conn = new PDO("mysql:host=$servername;dbname=cms2", $username, $password);
				    // set the PDO error mode to exception
				    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				    echo "Connected successfully"; 
				    }
				catch(PDOException $e)
				    {
				    echo "Connection failed: " . $e->getMessage();
				    }
	    
	    	echo "<br />\n";
	    	echo "<br />\n";

		    echo "Hello world!" ; 
		    				
		    echo "<br />\n";

			echo "Hello world!";
?>