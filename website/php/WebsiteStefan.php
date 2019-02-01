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
  Het CBS heeft nieuwe cijfers over het gebruik van sociale media in Nederland gepubliceerd. Hieruit blijkt dat ongeveer zeven op de tien Nederlandse internetgebruikers van 12 jaar en ouder in 2012 gebruikmaakten van sociale media. De meest voorkomende vorm is, niet heel verrassend, deelname aan sociale netwerken zoals Facebook of Twitter (56 procent van de internetgebruikers), daarna volgen instant messaging (35 procent) en het plaatsen van berichten op chatsites (30 procent). Ruim een op de vijf internetters (22 procent) is actief met bloggen en eenzelfde aantal gebruikt professionele sociale netwerken.

Het gebruik van sociale netwerken is gestegen van 53 procent in 2011 naar 57 procent in 2012. Ook het gebruik van professionele netwerken zoals LinkedIn is in deze periode toegenomen, namelijk van 20 procent naar 23 procent.
Het CBS heeft nieuwe cijfers over het gebruik van sociale media in Nederland gepubliceerd. Hieruit blijkt dat ongeveer zeven op de tien Nederlandse internetgebruikers van 12 jaar en ouder in 2012 gebruikmaakten van sociale media. De meest voorkomende vorm is, niet heel verrassend, deelname aan sociale netwerken zoals Facebook of Twitter (56 procent van de internetgebruikers). Daarna volgen instant messaging (35 procent) en het plaatsen van berichten op chatsites (30 procent). Ruim een op de vijf internetters (22 procent) is actief met bloggen en eenzelfde aantal gebruikt professionele sociale netwerken.

Het gebruik van sociale netwerken is gestegen van 53 procent in 2011 naar 57 procent in 2012. Ook het gebruik van professionele netwerken zoals LinkedIn is in deze periode toegenomen, namelijk van 20 procent naar 23 procent.
Het CBS heeft nieuwe cijfers over het gebruik van sociale media in Nederland gepubliceerd. Hieruit blijkt dat ongeveer zeven op de tien Nederlandse internetgebruikers van 12 jaar en ouder in 2012 gebruikmaakten van sociale media. De meest voorkomende vorm is, niet heel verrassend, deelname aan sociale netwerken zoals Facebook of Twitter (56 procent van de internetgebruikers). Daarna volgen instant messaging (35 procent) en het plaatsen van berichten op chatsites (30 procent). Ruim een op de vijf internetters (22 procent) is actief met bloggen en eenzelfde aantal gebruikt professionele sociale netwerken.

Het gebruik van sociale netwerken is gestegen van 53 procent in 2011 naar 57 procent in 2012. Ook het gebruik van professionele netwerken zoals LinkedIn is in deze periode toegenomen, namelijk van 20 procent naar 23 procent.
</p>
</div>

 <section class="b1">

 </div>
 </section>
 </body>
 </html>
