<?php 

require ('connect.php');

$pages = $conn->query("SELECT id, tekst FROM blog")->fetchAll(PDO::FETCH_ASSOC);

<<<<<<< HEAD


=======
foreach($pages as $page){
	//echo $page['tekst'];
	//echo $page['id'];
}
require ('header.php')
>>>>>>> d46ae214bac66e3e497f33dc3c70a41d12960ce5
?>



<!DOCTYPE html>
<html>
<head>
	<title>Vieuw pages</title>
<<<<<<< HEAD
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
=======

	<link rel="stylesheet" type="text/css" href="../css/grid.css">
</head>
<body>
		<div class="test123">
			<?php
			foreach($pages as $page){
			echo $page['tekst']; 
			}
			?>
		</div>

		
>>>>>>> d46ae214bac66e3e497f33dc3c70a41d12960ce5
	</div>
</body>
</html>