<?php
session_start();
$admin=$_POST['admin'];
$password=$_POST['password'];

if($admin=="admin" && $password=="123456"){

  $_SESSION['admin']=true;
  header("location:item-list.php");

}else{

  header("location:index.php");
}
