<?php 

if (isset( $_POST['tekst'])){
	$tekst = $_POST['tekst'];

}else{
	
	require('connect.php');

	$sql = "INSERT INTO blog (tekst) VALUES (:tekst)";
    $query = $conn->prepare($sql);

      $query->bindParam(':tekst', $tekst, PDO::PARAM_STR);
      $query->execute();
     }
     	

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
</head>

<body>
<h1></h1>
  <form method="post">
    <textarea name="tekst" id="mytextarea">Renko</textarea>
    <button  class="submit" type="submit" name="button" >Test</button>
  </form>

</body>
</html>