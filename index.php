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

<?php

session_start();

include_once("db.php");

$sqlMovies = "SELECT * FROM movies";
$resultMovies = mysqli_query($con, $sqlMovies);
$movies = mysqli_fetch_all($resultMovies, MYSQLI_ASSOC);

$sqlSerials = "SELECT * FROM serials";
$resultSerials = mysqli_query($con, $sqlSerials);
$serials = mysqli_fetch_all($resultSerials, MYSQLI_ASSOC);


?>

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
      <div class="content-container">
        <div
          class="featured-content"
          style="
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0), #151515),
              url('img/bbb2.jpg');
          "
        >
          <img class="featured-title" src="img/a2-3.png" alt="" />
          <p class="featured-desc">
            Tanjiro and Nezuko, along with Zenitsu and Inosuke, join one of the
            most powerful swordsmen within the Demon Slayer Corps, Flame Hashira
            Kyojuro Rengoku, to face the demon aboard the Mugen Train on track
            to despair..
          </p>
          <button class="featured-button">WATCH</button>
        </div>
        <div class="movie-list-container">
          <h1 class="movie-list-title">Movies</h1>
          <div class="movie-list-wrapper">
            <div class="movie-list">

            <?php

              for($m=0;$m<count($movies)/2;$m++)
                echo '
                <div class="movie-list-item">
                  <img class="movie-list-item-img" src="images/'.$movies[$m]['picture'].'" alt="" />
                  <span class="movie-list-item-title">'.$movies[$m]['title'].'</span>
                  <p class="movie-list-item-desc">
                    '.substr($movies[$m]['description'], 0, 90).'...
                  </p>
                  <button class="movie-list-item-button">Watch</button>
                </div>
                ';
            ?>

        
            </div>
            <i class="fas fa-chevron-right arrow"></i>
          </div>
        </div>
        <div class="movie-list-container">
          <h1 class="movie-list-title">Series </h1>
          <div class="movie-list-wrapper">
            <div class="movie-list">
              <?php

                for($s=0;$s<count($serials)/2;$s++)
                  echo '
                  <div class="movie-list-item">
                    <img class="movie-list-item-img" src="images/'.$serials[$s]['picture'].'" alt="" />
                    <span class="movie-list-item-title">'.$serials[$s]['title'].'</span>
                    <p class="movie-list-item-desc">
                      '.substr($serials[$s]['description'], 0, 90).'...
                    </p>
                    <button class="movie-list-item-button">Watch</button>
                  </div>
                  ';

              ?>
            </div>
            <i class="fas fa-chevron-right arrow"></i>
          </div>
        </div>
        <div
          class="featured-content"
          style="
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0), #151515),
              url('img/f-2.jpg');
          "
        >
          <!-- <img class="featured-title" src="img/f-t-2.png" alt="" />
          <p class="featured-desc">
            Tanjiro and Nezuko, along with Zenitsu and Inosuke, join one of the
            most powerful swordsmen within the Demon Slayer Corps, Flame Hashira
            Kyojuro Rengoku, to face the demon aboard the Mugen Train on track
            to despair..
          </p> -->
          <button class="featured-button">WATCH</button>
        </div>

        <div class="movie-list-container">
          <h1 class="movie-list-title">Movies</h1>
          <div class="movie-list-wrapper">
            <div class="movie-list">

            <?php

              for($m=count($movies)/2;$m<count($movies);$m++)
                echo '
                <div class="movie-list-item">
                  <img class="movie-list-item-img" src="images/'.$movies[$m]['picture'].'" alt="" />
                  <span class="movie-list-item-title">'.$movies[$m]['title'].'</span>
                  <p class="movie-list-item-desc">
                    '.substr($movies[$m]['description'], 0, 90).'...
                  </p>
                  <button class="movie-list-item-button">Watch</button>
                </div>
                ';

            ?>

            </div>
            <i class="fas fa-chevron-right arrow"></i>
          </div>
        </div>

        <div class="movie-list-container">
          <h1 class="movie-list-title">Series</h1>
          <div class="movie-list-wrapper">
            <div class="movie-list">
              <?php

                for($s=count($serials)/2;$s<count($serials);$s++)
                  echo '
                  <div class="movie-list-item">
                    <img class="movie-list-item-img" src="images/'.$serials[$s]['picture'].'" alt="" />
                    <span class="movie-list-item-title">'.$serials[$s]['title'].'</span>
                    <p class="movie-list-item-desc">
                      '.substr($serials[$s]['description'], 0, 90).'...
                    </p>
                    <button class="movie-list-item-button">Watch</button>
                  </div>
                  ';

              ?>
            </div>
            <i class="fas fa-chevron-right arrow"></i>
          </div>
        </div>
      </div>
    </div>
    <script src="app.js"></script>
  </body>
</html>
