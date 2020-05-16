<?php
session_start();
if($_SESSION["admin"]=="")
{
	header('location:"mess_login.php');
}
$d=mysqli_connect('localhost','root','');
$e=mysqli_select_db($d,'mess');
foreach ($_COOKIE['item'] as $name => $value) 
{
	$value11=explode("__",$value);
	mysqli_query($d,"insert into orders(name,price,quantity,total)values('$value11[0]','$value11[1]','$value11[2]','$value11[3]')");
}
echo "your order is placed";
?>