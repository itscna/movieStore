<!DOCTYPE html>
<html>
<head>
	<title>Movie Store</title>
	 <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
		<div class="container-fluid">
			<h2>Edit Movie</h2>
			<!--Getting the editing item from Database Table -->
			<?php
			include "config/config.php";
			$id=$_GET['id'];
			$sql="SELECT * FROM items WHERE id=$id";
			$result=mysqli_query($link,$sql);
			$row=mysqli_fetch_assoc($result);
			?>

			<div class="form">
			<form action="item-update.php" method="post" enctype="multipart/form-data">

				<input type="hidden" name="id" value="<?=$row['id'] ?>">

				<div class="form-group">
					<label for="title">Movie Title</label>
					<input type="text" name="title" id="title" class="form-control" value="<?= $row['title'] ?>">
				</div>
				<div class="form-group">
					<label for="author">Movie Author</label>
					<input type="text" name="author" id="author" class="form-control" value="<?=$row['author'] ?>">
				</div>
				<div class="form-group">
					<label for="about">About</label>
				<textarea class="form-control" id="about" name="about">
					<?=$row['about'] ?>
				</textarea>
				</div>	<br> <br>
				<img src="covers/<?=$row['cover'] ?>" alt="cover Image" height="200" width="100">
					<br><br>
				<div class="custom-file">
					<input type="file" name="cover" class="custom-file-input" id="cover">
					<label for="cover" class="custom-file-label">Choose Cover Image</label>
				</div>
				<br><br>
				<!-- Getting categories-->
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

                <input type="submit" value="Edit" class="btn btn-primary">
			</form>
		</div>
			<a href="item-list.php" class="text-primary">Go Back</a>
		</div>
</body>
</html>
