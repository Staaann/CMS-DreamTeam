<?php
require('connect.php');
require('header.php');
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
    <title>HomePage</title>
    <link rel="stylesheet" type="text/css" href="../css/index.css">
  </head>
  <body>

</body>


<br>

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

    <div class="in1">
    <div class="content">
<!-- Dit moet van de data base komen -->

<div class="middle">
<h1 class="page-title">
  CBS: Gebruik en de gebruikers van sociale media in Nederland
</h1>

<p>
<?php 
$pages = $conn->query("SELECT id, tekst FROM home")->fetchAll(PDO::FETCH_ASSOC);
foreach ($pages as $page) {

  echo $page['tekst'];
}

 ?>
</p>
</div>

 <section class="b1">

 </div>
 </section>
 </body>
 </html>
