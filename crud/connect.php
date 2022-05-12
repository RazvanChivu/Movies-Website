<?php

include_once("../db.php");

if( isset($_POST['submit']) )
{
  $rol = $_POST['rol'];
  $user = $_POST['user'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "INSERT INTO users (rol,user,email,password) VALUES ('utilizator','$user','$email','$password')";

  if(mysqli_query($con, $sql))
    echo "Adaugat";
  else echo "Eroare";


}
else{
  echo "eroare";
}

?>