<?php
$d=mysqli_connect('localhost','root','');
$e=mysqli_select_db($d,'mess');
session_start();
$username=$_POST['username'];
$coins=$_POST['coins'];
$result=mysqli_query($d,"select * from student WHERE username='$username'");
while($res=mysqli_fetch_array($result)){
	$coins1=$res['coins'];
}
$coins=$coins1+$coins;
mysqli_query($d,"UPDATE student SET coins=$coins WHERE username='$username'")or die(mysqli_error());
header("location:mess_givecoins_messwala.php");
?>
