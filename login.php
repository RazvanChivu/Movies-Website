<?php

include_once("db.php");

session_start();

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("Location: welcome.php");
}
else{
  if( isset($_POST['submit']) ){
    $user = $_POST['user'];
    $password = $_POST['password'];

    $user = mysqli_real_escape_string($con, $user);
    $password = mysqli_real_escape_string($con, $password);

    $sql = "SELECT * FROM users WHERE user='$user' AND password='$password'";
    $result = mysqli_query($con, $sql);
    $date = mysqli_fetch_all($result, MYSQLI_ASSOC);

    if(mysqli_num_rows($result)==1){    
      $_SESSION['loggedin'] = true;
      $_SESSION['user'] = $date[0]['user'];
      $_SESSION['id'] = $date[0]['id'];
      $_SESSION['rol'] = $date[0]['rol'];    
      header("Location: welcome.php"); 
    }
    else{
      echo '<script>alert("Datele nu sunt corecte")</script>';
    }
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
        <h1>Login Here</h1>
        <form method="post">
          <p>Username</p>
          <input type="text" name="user" placeholder="Enter Username" />
          <p>Password</p>
          <input type="password" name="password" placeholder="Enter password" />
          <input type="submit" name="submit" value="Login" />
          <a href="register.php">Forgot your password?</a><br />
          <a href="register.php">Create new account</a>
        </form>
    </div>
  </body>
</html>