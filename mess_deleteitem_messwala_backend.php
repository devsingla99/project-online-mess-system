<?php
session_start();

if($_SESSION["admin"]=="")
{
  header('location:mess_login_messwala.php');
}

$d=mysqli_connect('localhost','root','');
$e=mysqli_select_db($d,'mess');
$e1=mysqli_query($d,"select * from food_item");
$id=$_GET['id'];
$q=mysqli_query($d,"delete from food_items where id='$id'");
header("location:mess_deleteitem_messwala.php");
?>
