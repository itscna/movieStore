<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Movie Store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
  </head>
  <body>
      <div class="container-fluid">
        <div class="login">
            <h2>Movie Store</h2>
              <form action="login.php" method="post" class="login-form">
                <div class="form-group">
                <label for="admin">Admin Name</label>
                <input type="text" name="admin" class="form-control" id="admin" placeholder="Enter Admin Name" required>
              </div>
              <div class="form-group">
                <label for="pwd">Password</label>
                <input type="password" name="password" class="form-control" id="pwd" minlength="6" placeholder="Enter Password"
                aria-describedby="passwordHelp" required>
                <small id="passwordHelp" class="form-text text-muted">Passwords Must have at least 6 Characters</small>
              </div>
              <button type="submit" class="btn btn-primary">Login</button>
              </form>
        </div>
      </div>
  </body>
</html>
