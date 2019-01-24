<?php
require('connect.php');

// Simon // make sure user is logged in needed every page!
if (!$_SESSION['username']) {
    $loginError = "You are not logged in.";
    header("location: index.php");
    exit();

}
      error_reporting(0);
      ini_set('display_errors', 0)
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Blog</title>
	<link rel="stylesheet" type="text/css" href="../css/index.css">
</head>
<body>
	<header

	</header>

	<div class="wrapper">

			<div class="box1">
			 	<h1 class="Blog">Blog</h1>
			 </div>

			<div class="list">
				<ul class="ul">
					<li><a href="#home">CAT1</a></li>

					<li><a href="#home">CAT2</a></li>
					<li><a href="#home">CAT3</a></li>
					<li><a href="#home">CAT4</a></li>
				</ul>
			</div>


	</div>

=======

>>>>>>> dd1dd88c82edf769c4e9d65890890b36c6feffed
</body>
</html>
