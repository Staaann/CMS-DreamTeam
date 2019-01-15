<?php
          


          if (isset($_POST['username'])) {
          $username = $_POST['username'];
          }
 
          if (isset($_POST['password'])) {
          $password = $_POST['password'];
          }

          if (isset($_POST['password1'])) {
          $password1 = $_POST['Repeat Password'];
          }

          

          if (isset($_POST['email'])) {
          $email = $_POST['email'];
          } 

          if ($password != $password1) {
           $error= 'Your Password do not match';
          } 


      require('connect.php');
       
      $sql = "INSERT INTO users (username, password, email) VALUES (:username, :password, :email)";

      $query = $conn->prepare($sql);

      $query->bindParam(':username', $username, PDO::PARAM_STR);
      $query->bindParam(':password', $password, PDO::PARAM_STR);
      $query->bindParam(':email', $email, PDO::PARAM_STR);
      $query->execute();
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Register</title>
      <link rel="stylesheet" type="text/css" href="../css/CMScss.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
    <body>
      <div class="registerplek">
        <div class="Registernaam">
          <h1>Register</h1>
           </div>
            <div>
              <form class="mop" action="register.php" method="post">
                <input class="knoppen" type="text" name="username"  placeholder="Username" required >
                <br>
                 <input class="knoppen" type="email" name="email"  placeholder="Email" required>
                <br>
                 <input class="knoppen" type="password" name="password"  placeholder="Password"  required>
                <br>
                 <input class="knoppen" type="password" name="password1"  placeholder="Repeat Password"  required>
                <br>
                 <button  class="submit" type="submit" name="button" >Sign up</button>
               <br>
                  <p class="massage">already registered? <a class="massage" href="./index.php">login</a> </p>
              </form>
            </div>
          </div>

        </body>
      </html>
