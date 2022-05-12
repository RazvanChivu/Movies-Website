<?php

include_once("../db.php");

if( isset($_POST['submit']) )
{
  $id=$_GET['updateid'];
  $picture = $_FILES["picture"]["name"];
  $tempname = $_FILES["picture"]["tmp_name"];    
  $folder = "../images/".$picture;
  $title = $_POST['title'];
  $genre = $_POST['genre'];
  $description = $_POST['description'];
  $year = $_POST['year'];

  $sqlg = "SELECT picture FROM movies WHERE id='$id'";
  $res = mysqli_query($con, $sqlg);
  if(mysqli_num_rows($res)>0){
    $pic = mysqli_fetch_array($res, MYSQLI_ASSOC);
    $forDel = $pic['picture'];
    $delFolder = "../images/".$forDel;
    if(is_file($delFolder))
    {
      unlink($delFolder);
    }
  }

  if(move_uploaded_file($tempname, $folder)){
    $sql = "update movies set title='$title', genre='$genre', description='$description', year='$year', picture='$picture' where id='$id'";
    if(mysqli_query($con, $sql)){
      echo "Modificat";
      header('location:movies.php');
    }
    else echo "Eroare "  . mysqli_error($con);
  }
  else echo '<script>alert("Poza nu a putut fi incarcata")</script>';
}

?>


<!doctype html>
<html lang="en">
  <head>
    <title>Update Movies</title>
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
            <input type="text" class="form-control" placeholder="Update movie's title" name="title" autocomplete="off">
            </div>

            <div class="form-group">
            <label>Genre</label>
            <input type="text" class="form-control" placeholder="Update genre" name="genre" autocomplete="off">
            </div>
  
          <div class="form-group">
            <label>Description</label>
            <input type="text" class="form-control" placeholder="Update description" name="description" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Year</label>
                <input type="text" class="form-control" placeholder="Update release year" name="year" autocomplete="off">
          </div>

          <div class="form-group">
            <label>Picture</label>
            <input type="file" name="picture" value=""/>
          </div>
          <button type="submit" name="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

</body>
</html>