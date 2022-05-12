
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
        <form method="post" action="connect.php">
          <div class="form-group">
            <label>User</label>
            <input type="text" class="form-control" placeholder="Enter your username" name="user" autocomplete="off">
            </div>

            <div class="form-group">
            <label>Rol</label>
            <input type="text" class="form-control" placeholder="Enter your rol" name="rol" autocomplete="off">
            </div>
  
          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Enter your password" name="password" autocomplete="off">
          </div>
          <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
        </form>
    </div>

</body>
</html>