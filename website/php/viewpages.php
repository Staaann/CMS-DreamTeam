<?php

require ('connect.php');
require ('header.php');
// Simon // make sure user is logged in needed every page!
if (!$_SESSION['username']) {
    $loginError = "You are not logged in.";
    header("location: index.php");
    exit();

}

$pages = $conn->query("SELECT id, tekst FROM blog")->fetchAll(PDO::FETCH_ASSOC);

//laat de id zien

foreach ($pages as $page) {

	$id = $page['id'];
	//$posts = $page['id'];
	//$tekst = $page['tekst'];
	echo ($id);
	echo "<br>";
}

	$id = $id - 2;
	echo $id;



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
						//laat maar 2 zien
						echo $page['tekst'];
						$page_number = $page['id'] / 2;
						$count ++;

						if($count == 2){
							
							//break;
					
							break;
						}


						}
							  if (isset($_POST["1"])){
							  echo "string";
							  if ($id == 3 ) {
							  	echo $tekst;

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
