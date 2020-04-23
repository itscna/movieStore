<?php include "config/config.php" ?>
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
      <!--Getting Movie Category from database Table -->
      <?php
        $sql="SELECT * FROM categories";
        $results=mysqli_query($link,$sql);
       ?>
      <h2>Movie Lists</h2>

      <!--Showing Movie Category -->
        <ol>
          <?php while($row=mysqli_fetch_assoc($results)): ?>
            <li title=<?php echo $row['remark'] ?> >
              <?php echo $row['name'] ?>
              <a href="cat-edit.php?id=<?php echo $row['id'] ?>">Edit</a> /
              <a href="cat-del.php?id=<?php echo $row['id'] ?>"
              onclick="return confirm('Do you  want to delete this item?');">Delete</a>
            </li>
          <?php endwhile; ?>
        </ol>

    <!--Redirecting to Category New Page -->
<a href="cat-new.php" class="text-secondary">Add New Category</a>
</div>
  </body>
</html>
