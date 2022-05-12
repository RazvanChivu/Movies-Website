<?php

include_once("db.php");

if( isset($_POST['submit']) ){

  $user = $_POST['user'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $password2 = $_POST['password2'];

  if($user && $email && $password && $password2){
    if($password != $password2) {
      echo '<script>alert("Parolele nu corespund")</script>';
    }
    else{
      $user = mysqli_real_escape_string($con, $user);
      $email = mysqli_real_escape_string($con, $email);
      $password = mysqli_real_escape_string($con, $password);

      $sql = "INSERT INTO users (rol,user,email,password) VALUES ('utilizator','$user','$email','$password')";
      if(mysqli_query($con,$sql)){
        echo '<script>alert("Esti inregistrat cu succes")</script>';
        header("Location: login.php");
      }
      else echo '<script>alert("S-a produs o eroare")</script>';
    }
  }
  else{
    echo '<script>alert("Toate campurile sunt obligatorii")</script>';
  }

}


?>


<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style_login.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <title>Login</title>
  </head>

  <body>
     <div class="background">
        <img src="img/spider_background.jpg" class="background" />
      </div> 
    
      <div class="login-box">
        <div class="avatar">
          <img src="img/user2.jpg" class="avatar" />
        </div>
        <h1>Sign Up</h1>
        <form method="post">
            <input type="text" name="user" placeholder="Username"/>
            <input type="text" name="email" placeholder="Email"/>
            <input type="password" name="password" placeholder="Password"/>

            <input type="password" name="password2" placeholder="Retype password"/>

            <input type="submit" name="submit" value="Sign up"/>      
        </form>
    </div>
  </body>
</html>
