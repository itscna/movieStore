<?php

include "config/config.php";

$id=$_POST['id'];

$title=$_POST['title'];

$author=$_POST['author'];

$about=$_POST['about'];

$categoryId=$_POST['categoryId'];

$cover=$_FILES['cover']['name'];

$tmp=$_FILES['cover']['tmp_name'];

if($cover){
  move_uploaded_file($tmp,'covers/$cover');

  $sql="UPDATE items SET title='$title',author='$author',about='$about',cover='$cover',category_id='$categoryId'
        ,modified_date=now() WHERE id=$id";

  mysqli_query($link,$sql);
}else{
  $sql="UPDATE items SET title='$title',author='$author',about='$about',category_id='$categoryId'
      ,modified_date=now() WHERE id=$id";
  mysqli_query($link,$sql);
}

//Redirecting to Items List Page

header("location:item-list.php");
