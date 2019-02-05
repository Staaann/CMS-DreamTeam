<?php
require('connect.php');
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
//Hier word gekeken of het een echt of nep bestand is

if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Maximale bestand grote
if ($_FILES["fileToUpload"]["size"] > 1000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// White list bepaalde bestanden
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
//
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// Alls alles goed is word de foto geupload
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      $sql = 'UPDATE users SET image= "'.$target_file.'" WHERE username = "'.$_SESSION['username'].'"';
      $query= $conn->prepare($sql);
      $query->execute();
header("location: profile.php");

    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
