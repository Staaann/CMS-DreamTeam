<?php 

require ('connect.php');

$pages = $conn->query("SELECT id, tekst FROM blog")->fetchAll(PDO::FETCH_ASSOC);

foreach($pages as $page){
	echo $page['tekst'];
	echo $page['id'];
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