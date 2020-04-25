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
    <div class="container-fluid">
      <h2>Movie Lists</h2>
        <!--Getting Categories and Items from Database Table-->
        <?php
            $sql="SELECT items.*,categories.name FROM items LEFT JOIN categories ON items.category_id=categories.id ORDER BY items.created_date DESC";

            $result=mysqli_query($link,$sql); 
         ?>
         <ul>
            <?php while($row=mysqli_fetch_assoc($result)): ?>
           <li>
              <h4> <?php echo $row['title']; ?> </h4> <i> (in <?php echo $row['name']; ?> ) </i> 
              <img src="covers/<?php echo $row['cover'] ?> " alt="cover" height="150" width="90" style="float:right">
              <p> <?php echo $row['about'] ?> </p>
              <p> <b>Directed by: </b> <?php echo $row['author'] ?> </p>
              <p> [ <a href="item-edit.php?id=<?php echo $row['id']; ?> " class="text-info">Edit</a> ] 
                  [ <a href="item-del.php?id=<?php echo $row['id']; ?> " class="text-danger">Delete</a> ]
               </p>
               <hr>
           </li>
         <?php endwhile; ?>
         </ul>
         <a href="item-new.php" class="text-primary">Add New Movie</a>
    </div>
  </body>
</html>
