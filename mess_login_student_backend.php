<?php
$d=mysqli_connect('localhost','root','');
$e=mysqli_select_db($d,'mess');
session_start();
$name=$_POST['username'];
$pass=$_POST['password'];
$result= mysqli_query($d,"select * from (student) where username='$name' && password='$pass'");

if($row=mysqli_fetch_array($result))
{
$_SESSION["admin"]=$row["username"];
$_SESSION["first"]=$row["firstname"];
//$_SESSION["coins"]=$row["coins"];
header('location:mess_placeorder_student.php');
}
else
{
header('location:mess_login.php');
}
?>
