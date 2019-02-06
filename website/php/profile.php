<?php
require('connect.php');
require('header.php');
// Simon // make sure user is logged in needed every page!
if (!$_SESSION['username']) {
    $loginError = "You are not logged in.";
    header("location: index.php");
    exit();
}
            //Change email
//we123123123123123123123123123123123123123123
//12312312312312312312312312312312312312312312
//12312312312312312312312312312312312312312312
if (isset($_POST['Submit1'])) {
if (isset( $_POST['email'] )){


$data = [

  'email' => $_POST['email'],

];
$sql = 'UPDATE users SET email= "'.$_POST['email'].'" WHERE username = "'.$_SESSION['username'].'"';
$query= $conn->prepare($sql);
$query->execute($data);
}}
$query = $conn->prepare('SELECT email FROM users WHERE username = "'.$_SESSION['username'].'"');
//$query->bindValue(':username', $userame, PDO::PARAM_STRING);
$query->execute();

while ($row = $query->fetch(PDO::FETCH_ASSOC))
{
    $email = $row['email'];
}
            //Change username
//we123123123123123123123123123123123123123123
//12312312312312312312312312312312312312312312
//12312312312312312312312312312312312312312312
if (isset($_POST['Submit1'])) {
if (isset( $_POST['username'] )){

$stmt = $conn->prepare("SELECT COUNT(*) AS count FROM `users` WHERE username=?");
$stmt->execute(array($username));
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
$username_count = $row["count"];
}

$data = [

  'username' => $_POST['username'],

];
$sql = 'UPDATE users SET username= "'.$_POST['username'].'" WHERE username = "'.$_SESSION['username'].'"';
$query= $conn->prepare($sql);
$query->execute($data);
}
$query = $conn->prepare('SELECT username FROM users WHERE username = "'.$_SESSION['username'].'"');
//$query->bindValue(':username', $userame, PDO::PARAM_STRING);
$query->execute();
header("location: index.php");
while ($row = $query->fetch(PDO::FETCH_ASSOC))
{

    $username = $row['username'];
}
}
            //Change password
//we123123123123123123123123123123123123123123
//12312312312312312312312312312312312312312312
//12312312312312312312312312312312312312312312

if (isset($_POST['Submit2'])) {
if (isset( $_POST['password'] , $_POST['password_repeat'])){


  $password = $_POST['password'];
  $password_repeat = $_POST['password_repeat'];
  $passwordlength= strlen($password);

  if ($password != $password_repeat)
  {
    echo "<script>
      alert('Password doesnt match');
      </script>";
  }
  elseif ($passwordlength <6) {
echo "<script>
      alert('password must be longer than 6');
      </script>";
  }


  else{


$salted = "ladakwjdawdoi".$password."dsakdalsdawdaw";
$hashed = hash('sha512', $salted);

$sql = 'UPDATE users SET password=:password WHERE username = "'.$_SESSION['username'].'"';

$query= $conn->prepare($sql);
$query->bindParam(':password', $hashed, PDO::PARAM_STR);
$query->execute();
}
}}
//we123123123123123123123123123123123123123123
//12312312312312312312312312312312312312312312
//12312312312312312312312312312312312312312312
$query = $conn->prepare('SELECT image FROM users WHERE username = "'.$_SESSION['username'].'"');
//$query->bindValue(':username', $userame, PDO::PARAM_STRING);
$query->execute();

while ($row = $query->fetch(PDO::FETCH_ASSOC))
{
    $image = $row['image'];
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
        <form action="profile.php" method="post">
          <ul>
            <li><p class="edit_profile_body_text">Name</p></li>
            <li><input class="edit_profile_vakjes" type="text" name="username"  placeholder="Username" value="<?php echo  $_SESSION['username']; ?>"></li>
          <br>
        </ul>
      <ul>
        <li><p class="edit_profile_body_text">Email</p></li>
        <li> <input class="edit_profile_vakjes" type="email" name="email"  placeholder="Email" value="<?php echo $email; ?>" ></li> <br><br>
      </ul>
        <button  class="submit" type="submit" name="Submit1" >Update</button>
        <p style="text-align:center;">*changing this will log you out</p>
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
            <button  class="submit" type="submit" name="Submit2" >Update</button>
          </form>
        </div>
          <!-- Endo password erea --->
          <!--  change password erea --->
        <div class="edit_profile_title">
          Change profile picture
        </div>
          <div class="edit_profile_body">
            <br>
              <form action="upload.php" method="post" enctype="multipart/form-data">
                    <p style="text-align:center; padding-bottom:5px;">Select Profile picture:</p><br>
                    <p style="text-align:center;"><input type="file" name="fileToUpload" id="fileToUpload"></p><br>
                  <button  class="submit" type="submit" value="Upload Image" name="submit3" >Update</button>
              </form>
          </div>
            <!-- Endo password erea//////https://www.w3schools.com/php/php_file_upload.asp --->
            <p>Current profile picture <br>
            <img  src="<?php echo $image; ?>" height='130' width='150'" alt=""" ></p>


  </div>
  </body>
</html>
