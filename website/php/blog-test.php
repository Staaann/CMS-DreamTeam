<?php 
require('connect.php');
if (isset( $_POST['tekst'])){
	$tekst = $_POST['tekst'];

    	$sql = "INSERT INTO blog (tekst) VALUES (:tekst)";
      $query = $conn->prepare($sql);
      $query->bindParam(':tekst', $tekst, PDO::PARAM_STR);
      $query->execute();
      echo "gay";
     }


      $getdata = $conn->prepare("SELECT * FROM blog");
      $getdata->fetchAll();

      $tekst = $getdata->fetch();
      echo $tekst;
       
?>




<!DOCTYPE html>
<html>
<head>
  <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=5xpfjku55046lllgrobb2m0ru86f3gov7egzz8bru5ozabm4"></script>
  <script>
  tinymce.init({
    selector: '#mytextarea'
  });
  </script>
  <link rel="stylesheet" type="text/css" href="../css/grid.css">
</head>

<body>
<h1></h1>
  <div class="wrapper">
    <div>
      
    </div>
  <form method="post" action="blog-test.php" class="tekst">
    <textarea name="tekst" id="mytextarea"></textarea>
    <button  class="submit" type="submit" name="button" >Test</button>
  </form>
  <div>
    <?php
    ?>
  </div>
  <div>
            <a class="massage" href="viewpages.php">View pages</a>
</div>
</body>
</html>