<?php include "config/config.php"; ?>
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
    <!--Getting Record from database Table -->
    <?php
        $id=$_GET['id'];
        $result=mysqli_query($link,"SELECT * FROM categories WHERE id=$id");
        $row=mysqli_fetch_assoc($result);
     ?>
    <div class="container-fluid">
      <h2>Category Edit</h2>
      <!--Show The User to the Editing Form -->

      <form  action="cat-update.php" method="post">
        <div class="form-group">
          <input type="hidden" name="id" value="<?php echo $row['id'] ?>">  

          <label for="name">Category Name</label>
          <input type="text" name="category" value="<?php echo $row['name'] ?>" id="name" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="remark">Remark</label>
            <textarea name="remark" class="form-control" id="remark">
              <?php echo $row['remark'] ?>
            </textarea>
        </div>
        <input type="submit" value="Edit Now" class="btn btn-primary">
      </form>
      <!--Go Back to Category List Page -->
      <a href="cat-list.php" class="text-primary">Go Back</a>
    </div>
  </body>
</html>
