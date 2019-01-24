<?php
require('connect.php');

// Simon // make sure user is logged in needed every page!
if (!$_SESSION['username']) {
    $loginError = "You are not logged in.";
    header("location: index.php");
    exit();
}


$query = $conn->prepare('SELECT email FROM users WHERE username = "'.$_SESSION['username'].'"');
//$query->bindValue(':username', $userame, PDO::PARAM_STRING);
$query->execute();

while ($row = $query->fetch(PDO::FETCH_ASSOC))
{
    $email = $row['email'];
}


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
    <a href="WebsiteStefan.php" style="text-decoration: none; color:white;" >Homepage /</a>
    <?php
    //simon
    echo "Profile / ";
    echo  $_SESSION['username']
    ?>
  </div>
    <!-- Edit profile erea--->
    <div class="edit_profile_title">
Edit profile
</div>
  <div class="edit_profile_body">
      <br>
        <form action="#" method="post">
          <ul>
            <li><p class="edit_profile_body_text">Name</p></li>
            <li><input class="edit_profile_vakjes" type="text" name="username"  placeholder="Username" value="<?php echo  $_SESSION['username'] ?> "></li>
          <br>
        </ul>
      <ul>
        <li><p class="edit_profile_body_text">Email</p></li>
        <li> <input class="edit_profile_vakjes" type="email" name="email"  placeholder="Email" value="<?php echo $email; ?>" ></li> <br><br>
      </ul>
        <button  class="submit" type="submit" name="button" >Update</button>
      </form>
        </div>
          <!-- End profile erea  --->
        <!--  change password erea --->
      <div class="edit_profile_title">
        Change password
      </div>
        <div class="edit_profile_body">
          <br>
          <form action="#" method="post">
            <ul>
              <li><p class="edit_profile_body_text">New password</p></li>
              <li><input class="edit_profile_vakjes" type="password" name="password"  placeholder="Password" required ></li>
            <br>
          </ul>
          <ul>
        <li> <p class="edit_profile_body_text">Repeat password</p></li>
          <li> <input class="edit_profile_vakjes" type="password" name="password_repeat"  placeholder="Repeat password" required></li>
           <br><br></ul>
            <button  class="submit" type="submit" name="button" >Update</button>
          </form>
        </div>
          <!-- Endo password erea --->
          <!--  change password erea --->
        <div class="edit_profile_title">
          Change profile picture
        </div>
          <div class="edit_profile_body">
            <br>
            <form action="#" method="post">
              <ul>
                <li><p class="edit_profile_body_text">New password</p></li>
                <li><input class="edit_profile_vakjes" type="password" name="password"  placeholder="Password" required ></li>
              <br>
            </ul>
            <ul>
          <li> <p class="edit_profile_body_text">Repeat password</p></li>
            <li> <input class="edit_profile_vakjes" type="password" name="password_repeat"  placeholder="Repeat password" required></li>
             <br><br></ul>
              <button  class="submit" type="submit" name="button" >Update</button>
            </form>
          </div>
            <!-- Endo password erea --->



  </div>
  </body>
</html>
