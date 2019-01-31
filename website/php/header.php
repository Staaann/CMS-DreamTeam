<?php 
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

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
		<div class="header">
	  	<h1 class="site-title">DreamTeam</h1>
		<div class="UserProfileName">
	<nav id="menu">
    <ul>
        <li><a class="<?php echo ($page_name=='WebsiteStefan.php')?'active':'';?>" href="WebsiteStefan.php">Home</a></li>
        <li><a class="<?php echo ($page_name=='where-to-buy.php')?'active':'';?>" href="#">Portfolio</a></li>
		<li><a class="<?php echo ($page_name=='blog-test.php')?'active':'';?>" href="blog-test.php">Blog</a></li>
  		<li><a class="<?php echo ($page_name=='where-to-buy.php')?'active':'';?>" href="#">Contact</a></li>
  		<li><a class="<?php echo ($page_name=='profile.php')?'active':'';?>" href="profile.php">Edit profile</a></li>
	</ul>
	</nav>
	<div>
      <p>
        <a href="logout.php" class="logout logoutHov">
           Log out
        </a> 
            <?php
            //simon
            echo "Welcome ";
            echo  $_SESSION['username'];
            ?>
      </p>
    </div>
</div>
</div>
</body>
</html>