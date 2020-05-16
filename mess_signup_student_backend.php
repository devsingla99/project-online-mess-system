<?php
//error_reporting(0);
$d=mysqli_connect('localhost','root','');
$e=mysqli_select_db($d,'mess');
$e1=mysqli_query($d,"select * from student");
$x=$_POST['firstname'];
$y=$_POST['lastname'];
$z=$_POST['username'];
$w=$_POST['password'];
$q=$_POST['gender'];
$f=mysqli_query($d,"insert into student(firstname,lastname,username,password,gender)values('$x','$y','$z','$w','$q')");
header('location:mess_login.php');
?>
