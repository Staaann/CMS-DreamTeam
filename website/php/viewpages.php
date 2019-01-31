<?php 

require ('connect.php');

$pages = $conn->query("SELECT id, tekst FROM blog")->fetchAll(PDO::FETCH_ASSOC);


require ('header.php')

?>



<!DOCTYPE html>
<html>
<head>
	<title>Vieuw pages</title>
    <link rel="stylesheet" type="text/css" href="../css/grid.css">
</head>
<body>
	<div class="page">
		<?php  
			foreach($pages as $page){
				echo $page['tekst'];
				//echo $page['id'];
			}
		?>	

	</div>
</body>
</html>