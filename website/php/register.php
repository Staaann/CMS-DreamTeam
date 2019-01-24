<?php
    require('connect.php');

          if (isset( $_POST['username'] , $_POST['password'] , $_POST['password_repeat'] , $_POST['email'] )){

           // var_dump($_POST);

          $username = $_POST['username'];
          $password = $_POST['password'];
          $password_repeat = $_POST['password_repeat'];
          $email = $_POST['email'];
          $passwordlength= strlen($password);


  //simon
        $stmt = $conn->prepare("SELECT COUNT(*) AS count FROM `users` WHERE email=?");
       $stmt->execute(array($email));
       while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
         $email_count = $row["count"];
       }
       $stmt = $conn->prepare("SELECT COUNT(*) AS count FROM `users` WHERE username=?");
  $stmt->execute(array($username));
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $username_count = $row["count"];
  }
  if ($username_count AND $email_count > 0) {
    echo "That username and email is already in use";
  }

  elseif  ($email_count > 0) {
    echo "That email address is already in use";
  }

  elseif ($username_count > 0) {
    echo "That username is already in use";
  } 

    elseif ($passwordlength <6) {
  echo "password must be longer than 6";
    }//einde simon
          elseif ($password != $password_repeat)
          {
            echo "Password doesnt match";
          }

          else{

          if ($password != $password_repeat) {
            echo "Password doesnt match";
            }

              else{


          $salted = "ladakwjdawdoi".$password."dsakdalsdawdaw";
          $hashed = hash('sha512', $salted);

          //var_dump($hashed);




      $sql = "INSERT INTO users (username, password, email) VALUES (:username, :password, :email)";





      $query = $conn->prepare($sql);

      $query->bindParam(':username', $username, PDO::PARAM_STR);
      $query->bindParam(':password', $hashed, PDO::PARAM_STR);
      $query->bindParam(':email', $email, PDO::PARAM_STR);
      $query->execute();
      //simon
       header("location: index.php");
  }
 }
}

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
              <form class="formulier" action="register.php" method="post">
                <input class="knoppen" type="text" name="username"  placeholder="Username" required >
                <br>
                 <input class="knoppen" type="email" name="email"  placeholder="Email" required>
                <br>
                 <input class="knoppen" type="password" name="password"  placeholder="Password"  required>
                <br>
                 <input class="knoppen" type="password" name="password_repeat"  placeholder="Repeat Password"  required>
                <br>
                 <button  class="submit" type="submit" name="button" >Sign up</button>
               <br>
                  <p class="massage">already registered? <a class="massage" href="./index.php">login</a> </p>
              </form>
            </div>
          </div>

        </body>
      </html>
