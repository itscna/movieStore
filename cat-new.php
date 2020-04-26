<!DOCTYPE html>
<?php include "auth.php"; ?>
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
        <h2>Movie Store</h2>
            <form action="cat-add.php" method="post">
              <div class="form-group">
                <label for="category">Category Name</label>
                <input type="text" name="category" id="category" class="form-control" autofocus required>
              </div>
              <div class="form-group">
                <label for="remark">Remark</label>
                <textarea name="remark" class="form-control" id="remark" required></textarea>
              </div>
              <input type="submit" value="Add Category" class="btn btn-primary">
            </form>
      </div>
  </body>
</html>
