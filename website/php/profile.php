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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <header class="head_profile">
        <ul>
        <li><a href="WebsiteStefan.php">Home</a></li>
        <li><a href="#news">Portofolio</a></li>
        <li><a href="#contact">Blog</a></li>
        <li><a href="#about">Chat</a></li>
        <li><a href="#contact">Contact</a></li>
      </form>
      </ul>
    </header>
<div class="wrapper_profile">
  <div class="welcome_profile">
    <a href="WebsiteStefan.php" style="text-decoration: none; color:#0264ff;" >Homepage /</a>
    <?php
    //simon
    echo "Profile / ";
    echo  $_SESSION['username']
    ?>
  </div>
    <div class="edit_profile_title">
Edit profile
</div>
  <div class="edit_profile_body">
      <br>
        <ul>
          <li><p class="edit_profile_body_text">Name</p></li>
          <li><input class="edit_profile_vakjes" type="text" name="username"  placeholder="Username" required ></li>
          <br>
        </ul>
      <ul>
        <li><p class="edit_profile_body_text">Email</p></li>
          <li> <input class="edit_profile_vakjes" type="email" name="email"  placeholder="Email" required></li> <br><br>
        </ul>
          <button  class="submit" type="submit" name="button" >Update</button>
        </div>

      <div class="edit_profile_title">
        Change password
      </div>
        <div class="edit_profile_body">
          <br>
            <ul>
              <li><p class="edit_profile_body_text">New password</p></li>
              <li><input class="edit_profile_vakjes" type="text" name="username"  placeholder="Username" required ></li>
            <br>
          </ul>
          <ul>
        <li> <p class="edit_profile_body_text">Repeat password</p></li>
          <li> <input class="edit_profile_vakjes" type="email" name="email"  placeholder="Email" required></li>
           <br><br></ul>
            <button  class="submit" type="submit" name="button" >Update</button>
          </div>




  </div>
  </body>
</html>
