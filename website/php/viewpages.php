<?php 

require ('connect.php');

$pages = $conn->query("SELECT id, tekst FROM blog")->fetchAll(PDO::FETCH_ASSOC);


require ('header.php');

?>



<!DOCTYPE html>
<html>
<head>
	<title>Vieuw pages</title>
    <link rel="stylesheet" type="text/css" href="../css/grid.css">
</head>
<body>
	<div class="cont">		
			<div class="page">
				<?php  
						$count = 0;
						foreach($pages as $page){
						echo $page['tekst'];	
						$count ++;
						if($count == 2){
							break;
						}
						}						
				?>	

			</div>
	</div>
</body>
</html>