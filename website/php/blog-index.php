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
	<link rel="stylesheet" type="text/css" href="../css/grid.css">
</head>
<body>
<<<<<<< HEAD

<header>
	<h1>Blog</h1>
	<ul class="ul">
						<a class="button, Simon" href="cat/cat1.php">Simon</a>
						<a class="button, Stan" href="cat/cat2.php">Stan</a>
						<a class="button, Renko" href="cat/cat3.php">Renko</a>
						<a class="button, Jonathan" href="cat/cat4.php">Jonathan</a>
						<a class="button, Stefan" href="cat/cat4.php">Stefan</a>


</header>



				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

=======
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

>>>>>>> a138b1f9735906c011336f2866be763e36323062
</body>
</html>
