<?php  
include 'config/config.php';
$id=$_GET['id'];
mysqli_query($link,"DELETE FROM items WHERE id=$id");

header("location:item-list.php");