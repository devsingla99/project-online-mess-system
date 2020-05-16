<?php
$d=mysqli_connect('localhost','root','');
$e=mysqli_select_db($d,'mess');
session_start();
$item_name=$_POST['item_name'];
$price=$_POST['price'];
$availability=$_POST['availability'];
mysqli_query($d,"insert into food_items(name,price,availability) values('$item_name','$price','$availability')")or die(mysqli_error());
header("location:mess_item_messwala.php");
?>
