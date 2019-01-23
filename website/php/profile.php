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
    <meta charset="utf-8">
    <title>Profile</title>
    <link rel="stylesheet" type="text/css" href="../css/profile.css">
  </head>
  <body>
    <header class="head_profile">
        <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#news">Portofolio</a></li>
        <li><a href="#contact">Blog</a></li>
        <li><a href="#about">Chat</a></li>
        <li><a href="#contact">Contact</a></li>
      </form>
      </ul>
    </header>

<div class="wrapper_profile">
  <div class="welcome_profile">
    <?php
    //simon
    echo "Profile, ";
    echo  $_SESSION['username']
    ?>
  </div>
    <div class="edit_profile_title">
Edit profile
</div>
  <div class="edit_profile_body">
      <br>
      <p class="edit_profile_body_text">Name:</p>
      <br>
      <p class="edit_profile_body_text">Email:</p>
</div>
  </div>
  </body>
</html>
