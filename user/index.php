<?php
  include "../config/config.php";


  if(isset($_GET['cat']))
  {
    $cat_id=$_GET['cat'];
    $sql="SELECT * FROM items WHERE category_id=$cat_id";
    $items=mysqli_query($link,$sql);
  }
  else{
    $sql="SELECT * FROM items";
    $items=mysqli_query($link,$sql);
  }

    $cats=mysqli_query($link,"SELECT * FROM categories")
 ?>
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
        <div class="row">
          <div class="col-md-3">
            <ul class="sidebar">
              <li><a href="index.php">All Categories</a></li>
              <?php while($row=mysqli_fetch_assoc($cats)): ?>
              <li>
              <a href="index.php?cat=<?php echo $row['id'] ?>" > <?php echo $row['name'] ?></a>
              </li>
            <?php endwhile; ?>
            </ul>
          </div>
          <div class="col-md-9">
              <div class="main">
                  <ul class="items">
                    <?php while($results=mysqli_fetch_assoc($items)): ?>
                    <li>
                      <img src="../covers/<?php echo $results['cover'] ?>" alt="cover" height="150">
                      <h5><a href="item-detail.php?id=<?php echo $results['id'] ?>"> <?php echo $results['title'] ?> </a></h5>
                      <p> <?php echo $results['author'] ?></p>
                    </li>
                  <?php endwhile; ?>
                  </ul>
              </div>
          </div>
        </div>
    </div>
  </body>
</html>
