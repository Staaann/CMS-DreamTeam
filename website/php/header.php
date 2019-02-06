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

  $query = $conn->prepare('SELECT image FROM users WHERE username = "'.$_SESSION['username'].'"');
  //$query->bindValue(':username', $userame, PDO::PARAM_STRING);
  $query->execute();

  while ($row = $query->fetch(PDO::FETCH_ASSOC))
  {
      $image = $row['image'];
  }

  //if (image) {
    // code...
  //}
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
	<nav id="menu">
    <ul>
        <li><a class="<?php echo ($page_name=='WebsiteStefan.php')?'active':'';?>" href="WebsiteStefan.php">Home</a></li>
		<li><a class="<?php echo ($page_name=='blog-test.php')?'active':'';?>" href="blog-test.php">Blog</a></li>
  		<li><a class="<?php echo ($page_name=='profile.php')?'active':'';?>" href="profile.php">Edit profile</a></li>
      <li><a class="<?php echo ($page_name=='profile.php')?'active':'';?>" href="profile.php">Contact</a></li>
      <li><a class="<?php echo ($page_name=='profile.php')?'active':'';?>" href="">Protofolio</a></li>
	</ul>
	</nav>

	<div class="UserProfileName">
      <p>

        <a href="logout.php" class="logout logoutHov">
           Log out
        </a>
            <?php
            //simon
            echo 'Welcome: <br>';
            echo  $_SESSION['username'];
            ?>
      </p>
    </div>
                      <div  style="float: left; margin: -30px 145px ; position: fixed; top: 36px; right:205px; border: 5px;">


    <img class="ProfilePicHok"  src="<?php echo $image; ?>" height='130' width='130'" >
                      </div>
  </div>
</div>
</body>
</html>
