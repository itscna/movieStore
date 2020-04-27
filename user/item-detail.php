<?php include "../config/config.php"; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Movie Store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <link rel="stylesheet" href="../style/style.css">
  </head>
  <body>
        <div class="container-fluid">
          <div class="row header">
              <div class="col-md-12">
                <h2>Movie Store</h2>
              </div>
          </div>
          <!--Getting the item record from Database Table -->
          <div class="row">
              <div class="col-md-12">
                  <?php $id=$_GET['id'];
                        $result=mysqli_query($link,"SELECT * FROM items WHERE id=$id");
                        $row=mysqli_fetch_assoc($result);
                  ?>
                  <h4><?php echo $row['title']; ?></h4>

                  <img src="../covers/<?php echo $row['cover'] ?>" alt="Cover Image" width="200" height="300">
                  <p><b>Directed By: <?php echo $row['author'] ?></b> </p>
                  <p><?php echo $row['about'] ?></p>
                  <p> <a href="index.php" class="text-primary">Go Back</a> </p>
              </div>
          </div>
        </div>
  </body>
</html>
