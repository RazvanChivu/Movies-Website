<?php

include_once("../db.php");

if( isset($_POST['submit']) )
{
  $id=$_GET['updateid'];
  $rol = $_POST['rol'];
  $user = $_POST['user'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "update users set rol='$rol', user='$user', email='$email', password='$password' where id='$id'";
  if(mysqli_query($con, $sql)){
    echo "Modificat";
    header('location:display.php');
  }
  else echo "Eroare "  . mysqli_error($con);

}

?>


<!doctype html>
<html lang="en">
  <head>
    <title>PHP CRUD</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container my-5">
        <form method="post">
          <div class="form-group">
            <label>User</label>
            <input type="text" class="form-control" placeholder="Update your username" name="user" autocomplete="off">
            </div>

            <div class="form-group">
            <label>Rol</label>
            <input type="text" class="form-control" placeholder="Update your rol" name="rol" autocomplete="off">
            </div>
  
          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="Update your email" name="email" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Update your password" name="password" autocomplete="off">
          </div>
          <button type="submit" name="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

</body>
</html>