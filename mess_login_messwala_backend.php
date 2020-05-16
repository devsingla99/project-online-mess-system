<?php
$d=mysqli_connect('localhost','root','');
$e=mysqli_select_db($d,'mess');
session_start();
$name=$_POST['username'];
$pass=$_POST['password'];
$result= mysqli_query($d,"select * from (messwala_login) where username='$name' && password='$pass'");

if(mysqli_num_rows($result)==1)
{
$_SESSION["admin"]="messwala";
header('location:mess_item_messwala.php');
}
else
{
header('location:mess_login_messwala.php');
}
?>
