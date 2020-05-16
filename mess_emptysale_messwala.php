<?php
session_start();

if($_SESSION["admin"]=="")
{
  header('location:mess_login_messwala.php');
}
$d=mysqli_connect('localhost','root','');
mysqli_select_db($d,"mess");
mysqli_query($d,'TRUNCATE TABLE place_order');
mysqli_query($d,'TRUNCATE TABLE orders');
header("location:mess_item_messwala.php");
?>