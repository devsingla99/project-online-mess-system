<?php
$d=mysqli_connect('localhost','root','');
$e=mysqli_select_db($d,'mess');
session_start();
$item_name=$_POST['item_name'];
$price=$_POST['price'];
mysqli_query($d,"UPDATE food_items SET price=$price WHERE name='$item_name'")or die(mysqli_error());
header("location:mess_changeprice_messwala.php");
?>
