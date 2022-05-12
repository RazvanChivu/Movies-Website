<?php

include_once("../db.php");

if( isset($_POST['submit']) )
{
  $picture = $_FILES["picture"]["name"];
  $tempname = $_FILES["picture"]["tmp_name"];    
  $folder = "../images/".$picture;
  $title = $_POST['title'];
  $genre = $_POST['genre'];
  $description = $_POST['description'];
  $year = $_POST['year'];

  if(move_uploaded_file($tempname, $folder)){
    $sql = "INSERT INTO movies (title,genre,description,year,picture) VALUES ('$title', '$genre', '$description','$year','$picture')";
    if(mysqli_query($con, $sql)){
      echo "Adaugat";
    }
    else echo "Eroare "  . mysqli_error($con);
  }
  else echo '<script>alert("Poza nu a putut fi incarcata")</script>';


}

?>


<!doctype html>
<html lang="en">
  <head>
    <title>Add Movie</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container my-5">
        <form method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label>Movie Title</label>
            <input type="text" class="form-control" placeholder="enter movie title" name="title" autocomplete="off">
            </div>

            <div class="form-group">
            <label>Genre</label>
            <input type="text" class="form-control" placeholder="enter genre" name="genre" autocomplete="off">
            </div>
  
          <div class="form-group">
            <label>Description</label>
            <input type="text" class="form-control" placeholder="enter description" name="description" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Release Year</label>
                <input type="text" class="form-control" placeholder="enter year" name="year" autocomplete="off">
          </div>

          <div class="form-group">
            <label>Picture</label>
            <input type="file" name="picture" value=""/>
          </div>
          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

</body>
</html>