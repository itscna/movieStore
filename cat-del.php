<?php
include "config/config.php";

$id=$_GET['id'];

$sql="DELETE FROM categories WHERE id=$id";

mysqli_query($link,$sql);

header("location:cat-list.php");
