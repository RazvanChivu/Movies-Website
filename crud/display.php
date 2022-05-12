<?php
include "../db.php";

session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
  header("Location: index.php");
}
else{
  $rol = $_SESSION['rol'];
  if($rol!='admin')
    header("Location: ../index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
</head>
<style>
.container{
  background: inherit;
}
</style>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add user</a>
        </button>
        <button class="btn btn-primary my-5"><a href="movies.php" class="text-light">Movies</a>
        </button>
        <button class="btn btn-primary my-5"><a href="serials.php" class="text-light">Series</a>
        </button>
        <button class="btn btn-primary my-5"><a href="../index.php" class="text-light">Back to Chillflix</a>
        </button>
        <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Rol</th>
      <th scope="col">User</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

  <?php

  $sql="Select * from users";
  $result=mysqli_query($con,$sql);
  console_log($result);

  if($result){
      while ($row=mysqli_fetch_assoc($result)){
          $id=$row['id'];
          $rol=$row['rol'];
          $user=$row['user'];
          $email=$row['email'];
          $password=$row['password'];
          echo '<tr>
          <th scope="row">'.$id.'</th>
          <td>.'.$rol.'</td>
          <td>.'.$user.'</td>
          <td>'.$email.'</td>
          <td>'.$password.'</td>
          <td>
        <button class ="btn btn-primary"><a href="update.php?updateid='.$id.'
        "class=text-light">Update</a></button>
        <button class ="btn btn-danger"><a href="delete.php?deleteid='.$id.' " 
        class=text-light">Delete</a></button>
    </td>
        </tr>';
      }
  }
  function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
  }
  ?>

    
  </tbody>
</table>
    </div>
</body>
</html>