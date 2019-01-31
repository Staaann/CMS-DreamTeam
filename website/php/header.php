<?php 
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
	    <link rel="stylesheet" type="text/css" href="../css/index.css">
	<title>

	</title>
</head>
<body>

	  	<h1 class="site-title">DreamTeam</h1>
		<div class="UserProfileName">
	<nav id="menu">
    <ul>
        <li><a class="<?php echo ($page_name=='WebsiteStefan.php')?'active':'';?>" href="#">Home</a></li>
        <li><a class="<?php echo ($page_name=='where-to-buy.php')?'active':'';?>" href="#">Portfolio</a></li>
		<li><a class="<?php echo ($page_name=='blog-index.php')?'active':'';?>" href="blog-stan.php">Blog</a></li>
  		<li><a class="<?php echo ($page_name=='where-to-buy.php')?'active':'';?>" href="#">Contact</a></li>
  		<li><a class="<?php echo ($page_name=='profile.php')?'active':'';?>" href="profile.php">Edit profile</a></li>
	</ul>
	</nav>

</body>
</html>