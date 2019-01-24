<?php
		/*	require('connect.php');


			if (!$_SESSION['username']) {
			    $loginError = "You are not logged in.";
			    header("location: index.php");
			    exit();
			} */
?>

<!DOCTYPE html>
<html>
<head>
  <script type="text/javascript" src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
  <script type="text/javascript">
  tinymce.init({
    selector: '#myTextarea',
    theme: 'modern',
    width: 600,
    height: 300,
    plugins: [
      'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
      'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
      'save table contextmenu directionality emoticons template paste textcolor'
    ],
    content_css: 'css/content.css',
    toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons'
  });
  </script>
</head>

<body>
  <textarea id="myTextarea"></textarea>
</body>
</html>