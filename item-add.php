<?php

include "config/config.php";

$title=$_POST['title'];
$author=$_POST['author'];
$about=$_POST['about'];
$categoryId=$_POST['categoryId'];
$cover=$_FILES['cover']['name'];
$tmp=$_FILES['cover']['tmp_name'];

if($cover){

		move_uploaded_file($tmp,"covers/$cover");
}


$sql="INSERT INTO items(title,author,about,category_id,cover,created_date,modified_date)
		VALUES('$title','$author','$about','$categoryId','$cover',now(),now())";


mysqli_query($link,$sql);

//Redirecting to the Item List Page
header("location:item-list.php");