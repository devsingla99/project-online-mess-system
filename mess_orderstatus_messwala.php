<?php
session_start();

if($_SESSION["admin"]==""){
  header('location:"mess_login_messwala.php');
}

$d=mysqli_connect('localhost','root','');
$e=mysqli_select_db($d,'mess');
$id=$_GET['id'];
$result=mysqli_query($d,"select * from place_order WHERE id=$id");
mysqli_query($d,"UPDATE place_order SET status=1 WHERE id=$id")or die(mysqli_error());
header('location:mess_vieworder_messwala.php');
?>
