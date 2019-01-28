<?php
require('connect.php');
$data = [
    'name' => $username,
    'email' => $email,

];
$sql = 'UPDATE users SET username=:username, email=:email WHERE username = "'.$_SESSION['username'].'"';
$query= $conn->prepare($sql);
 $query->execute($data);

header("location: index.php");

  ?>
