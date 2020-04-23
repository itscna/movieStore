<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="movies";

$link=mysqli_connect($dbhost,$dbuser,$dbpass);

mysqli_select_db($link,$dbname);
