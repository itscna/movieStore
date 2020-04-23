<?php

include "config/config.php";

$id=$_POST['id'];
$category=$_POST['category'];
$remark=$_POST['remark'];

$sql="UPDATE categories SET name='$category',remark='$remark',modified_date=now() WHERE id=$id ";

mysqli_query($link,$sql);

//Redirecting to the Category List Page
header("location:cat-list.php");
