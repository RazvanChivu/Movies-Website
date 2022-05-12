<?php
session_start();
?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <title>Movie Design</title>
  </head>


  <body>
    <div class="navbar">
      <div class="navbar-container">
        <div class="logo-container"><a href="index.php"><h1 class="logo">chillflix</h1></a></div>
        <div class="menu-container">
          <ul class="menu-list">
            <li class="menu-list-item active">Home</li>
            <li class="menu-list-item">Movies</li>
            <li class="menu-list-item">Serials</li>
            <li class="menu-list-item">Popular</li>
            <li class="menu-list-item">Trends</li>
          </ul>
        </div>
        <div class="profile-container">
          <div class="profile-text-container">
          <?php
              if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
                  echo '
                        <a href="login.php">Login</a>
                        <a href="register.php">Register</a>
                       ';
              }
              else{
                $user = $_SESSION['user'];
                $rol = $_SESSION['rol'];
                if($rol=='admin')
                  echo '
                        <a href="crud/display.php">Salut, '.$user.'</a>
                        <a href="logout.php">Logout</a>
                      ';
                else
                echo '
                        <a href="">Salut, '.$user.'</a>
                        <a href="logout.php">Logout</a>
                     ';
              }
            ?>
          </div>
        </div>
        <div class="toggle">
          <i class="fas fa-moon toggle-icon"></i>
          <i class="fa-solid fa-sun toggle-icon"></i>
          <div class="toggle-ball"></div>
        </div>
      </div>
    </div>
    <div class="sidebar">
      <i class="left-menu-icon fa-solid fa-magnifying-glass"></i>
      <i class="left-menu-icon fa-solid fa-house"></i>
      <i class="left-menu-icon fa-solid fa-users"></i>
      <i class="left-menu-icon fa-solid fa-bookmark"></i>
      <i class="left-menu-icon fa-solid fa-tv"></i>
      <i class="left-menu-icon fa-solid fa-hourglass-start"></i>
      <i class="left-menu-icon fa-solid fa-cart-shopping"></i>
    </div>
    <div class="container">

      <?php
      
        
    
        if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
            header("location: login.php");   
        }
        else{
          $user = $_SESSION['user'];
          echo "<h1 class='welcome'>Bine ai venit, $user</h1>";
        }

        
      ?>

    </div>
  </body>
</html>