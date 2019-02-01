<?php

require ('connect.php');

$pages = $conn->query("SELECT id, tekst FROM blog")->fetchAll(PDO::FETCH_ASSOC);
foreach ($pages as $page) {
	$id = $page['id'];
	$idk = $page['id'];
	$posts = $page['id'];
	$tekst = $page['tekst'];
	//echo $id;
	echo "<br>";
}
	$new = $id / 2;
	echo $new;
	$idk = $idk - 2;
	echo $idk;


//require ('header.php');

?>



<!DOCTYPE html>
<html>
<head>
	<title>Vieuw pages</title>
    <link rel="stylesheet" type="text/css" href="../css/grid.css">
    <script>
	function myFunction1()
	{
	alert("Pagina1");
	}
	function myFunction2()
	{
	alert("Pagina2");
	}
	function myFunction3()
	{
	alert("Pagina3");
	}
	function myFunction4()
	{
	alert("Pagina>>");
	}
	</script>
</head>
<body>
	<div class="cont">		
			<div class="page">
				<?php  

						$count = 0;
						$page_number = 0;
						
						foreach($pages as $page){
							echo $page['id'];
						echo $page['tekst'];
						//echo $page['id'];
						$page_number = $page['id'] / 2;
						$count ++;

						if($count == 2){
							break;
						
						}


						}
							  if (isset($_POST["1"])){
							  echo "1";
							  						foreach($pages as $page){
													echo $page['tekst'];
													//echo $page['id'];
													echo $page['id'];
													$count = 0;
													$count ++;
													if($count == 2){
														break;

													}


													}

							} if (isset($_POST["2"])){
							  if ($posts > 2) {
							  	echo $tekst;

							  }
							} if (isset($_POST["3"])){
							  echo "3";
							} if (isset($_POST["4"])){
							  echo ">>";
							} 					
				?>
				  <form method="post">
                  <input type="submit" id="1" name="1" onclick="amyFunction1()" value="1" />
				  <input type="submit" id="2" name="2" onclick="amyFunction1()" value="2" />
				  <input type="submit" id="3" name="3" onclick="amyFunction1()" value="3" />
				  <input type="submit" id="4" name="4" onclick="amyFunction1()" value=">>" />
				                           <a class="massege" href="blog-test.php">Schrijf je eigen blog</a>
              	  </form>
			</div>
	</div>
</body>
</html>