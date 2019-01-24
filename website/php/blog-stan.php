<?php 
//error_reporting(0);
//ini_set('display_errors', 0);
require('connect.php');

// Simon // make sure user is logged in needed every page!
if (!$_SESSION['username']) {
    $loginError = "You are not logged in.";
    header("location: index.php");
    exit();

}

  $full_name = $_SERVER['PHP_SELF'];
  $name_array = explode('/',$full_name);
  $count = count($name_array);
  $page_name = $name_array[$count-1];
?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Blog</title>
    <link rel="stylesheet" type="text/css" href="../css/grid.css">
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=5xpfjku55046lllgrobb2m0ru86f3gov7egzz8bru5ozabm4"></script>
  </head>
<body>
	 <?php
  //simon
  echo "Welcome ";
  echo  $_SESSION['username'];
  ?>
 

	<div class="wrapper">

			<div class="box1">
			 	
			 </div>


<div class="header">


  <h1 class="site-title">DreamTeam</h1>

	<nav id="menu">
	<ul>
	  <li><a class="<?php echo ($page_name=='WebsiteStefan.php')?'active':'';?>" href="WebsiteStefan.php">Home</a></li>
	  <li><a class="<?php echo ($page_name=='where-to-buy.php')?'active':'';?>" href="#">Portfolio</a></li>
	  <li><a class="<?php echo ($page_name=='blog-index.php')?'active':'';?>" href="blog-stan.php">Blog</a></li>
	  <li><a class="<?php echo ($page_name=='where-to-buy.php')?'active':'';?>" href="#">Chat</a></li>
	  <li><a class="<?php echo ($page_name=='where-to-buy.php')?'active':'';?>" href="#">Contact</a></li>
	</ul>
	</nav>
	  <div>
      <p>
        <a href="logout.php" class="logout logoutHov">
           Log out
        </a>
      </p>
    </div>

			
	</div>

</body>
</html>