<?php 

require ('connect.php');

$pages = $conn->query("SELECT id, tekst FROM blog")->fetchAll(PDO::FETCH_ASSOC);

foreach($pages as $pages){
	print_r ($pages);
}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Vieuw pages</title>
</head>
<body>

</body>
</html>