<?php

require('connect.php');
// Simon // make sure user is logged in needed every page!
if (!$_SESSION['username']) {
    $loginError = "You are not logged in.";
    header("location: index.php");
    exit();

}
if (isset( $_POST['tekst'])){
	$tekst = $_POST['tekst'];

    	$sql = "INSERT INTO blog (tekst) VALUES (:tekst)";
      $query = $conn->prepare($sql);
      $query->bindParam(':tekst', $tekst, PDO::PARAM_STR);
      $query->execute();
      echo "";
     }


      $getdata = $conn->prepare("SELECT * FROM blog");
      $getdata->fetchAll();

      $tekst = $getdata->fetch();
      echo $tekst;

     ?>




<!DOCTYPE html>
<html style=" font-family: 'Century Gothic',sans-serif;">
<head>
  <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=5xpfjku55046lllgrobb2m0ru86f3gov7egzz8bru5ozabm4"></script>

  <script>
  tinymce.init({
    selector: '#mytextarea',
    height: 600,


  });
  </script>
  <link rel="stylesheet" type="text/css" href="../css/index.css">
</head>

<body>

  <div class="wrapper">

    <div class="header-stefan">
      <?php
           require('header.php');
      ?>
    </div>

    <div class="leeg">
      <p> </p>
    </div>


            <form method="post" action="blog-test.php" class="tinymce">
                  <textarea name="tekst" id="mytextarea"></textarea>
                  <button  class="submit" type="submit" name="button" >Test</button>
                             <a class="massege" href="viewpages.php">View pages</a>
            </form>


    <div class="footer">

    </div>



    <!-- adasd -->

</div>
</body>
</html>
