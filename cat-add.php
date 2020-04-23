<?php

include "config/config.php";

$name=$_POST['category'];
$remark=$_POST['remark'];

mysqli_query($link,"INSERT INTO categories(name,remark,created_date,modified_date) VALUES ('$name',
            '$remark',now(),now())");

header("location:cat-list.php");
