<?php include "config/config.php";
      include "auth.php";
  ?>
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
      <!--Navigation Menu Starts Here -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
<a class="navbar-brand" href="#">Movie Store</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNavDropdown">
<ul class="navbar-nav">
  <li class="nav-item active">
    <a class="nav-link" href="item-new.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="item-list.php">Manages Movies</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="cat-list.php">Manages Category</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="logout.php">Logout</a>
  </li>
</div>
</nav>
   <!--Navigation Menu Ends Here -->
      <h2>New Item Add</h2>
        <div class="form">
            <form action="item-add.php" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="title">Item Name</label>
                <input type="text" name="title" id="title" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="author">Author</label>
                <input type="text" name="author" id="author" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="about">About Movie</label>
                <textarea name="about" id="about" class="form-control"></textarea>
              </div>

              <!--Getting Category from Categories Table -->

                  <div class="form-group">
                      <label for="selectForm">Select Category</label>
                      <select class="form-control" id="selectForm" name="categoryId">

                            <?php
                                $sql="SELECT id,name FROM categories";
                                $result=mysqli_query($link,$sql);
                                while($row=mysqli_fetch_assoc($result)):
                              ?>
                              <option value="<?php echo $row['id'] ?>">
                                <?php echo $row['name'] ?>
                             </option>
                           <?php endwhile; ?>
                        </select>
                    </div>

              <div class="custom-file">
                  <input type="file" name="cover" class="custom-file-input" id="cover">
                  <label for="cover" class="custom-file-label">Choose Cover Image</label>
              </div><br><br>
              <input type="submit" class="btn btn-block btn-primary" value="Add Item">
            </form>
        </div>
    </div>
  </body>
</html>
