<?p  cd grb ag56h 7mwi,o8.9p;5'=hp
    session_start();

          if (isset( $_POST['username'] , $_POST['password'] , $_POST['password_repeat'] , $_POST['email'] )){

            var_dump($_POST);

          $username = $_POST['username'];
          $password = $_POST['password'];
          $password_repeat = $_POST['password_repeat'];
          $email = $_POST['email'];  

          if ($password != $password_repeat) {
            echo "Password doesnt match";
            
          }else{

          $salted = "ladakwjdawdoi".$password."dsakdalsdawdaw";
          $hashed = hash('sha512', $salted);        
         
          var_dump($hashed);

      require('connect.php');
       
      $sql = "INSERT INTO users (username, password, email) VALUES (:username, :password, :email)";

      $query = $conn->prepare($sql);

      $query->bindParam(':username', $username, PDO::PARAM_STR);
      $query->bindParam(':password', $hashed, PDO::PARAM_STR);
      $query->bindParam(':email', $email, PDO::PARAM_STR);
      $query->execute();  
  }
 }else{
  echo "geen data";
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
