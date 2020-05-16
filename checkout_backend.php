<?php
session_start();
if($_SESSION["admin"]==""){
	header('location:"mess_login.php');
}
error_reporting(0);
$d=mysqli_connect('localhost','root','');
$e=mysqli_select_db($d,'mess');

$x=$_POST['firstname'];
$z=$_POST['room'];
$w=$_POST['pin'];
$q=$_SESSION["admin"];
$a=$_SESSION["coins"];
$b=$_SESSION["total"];
$f=mysqli_query($d,"insert into place_order(username,firstname,room,pin)values('$q','$x','$z','$w')");
$e1=mysqli_query($d,"select * from place_order");
while($e2=mysqli_fetch_array($e1)){
	$id=$e2[0];
}
foreach ($_COOKIE['item'] as $name => $value) 
{
	$av;
	$value11=explode("__",$value);
	mysqli_query($d,"insert into orders(order_id,name,price,quantity,total)values('$id','$value11[0]','$value11[1]','$value11[2]','$value11[3]')");

	$run=mysqli_query($d,"select * from food_items");
	while($row=mysqli_fetch_array($run))
	{
		if($row['name']==$value11[0]){
		
		$av=$row['availability'];
		$id1=$row['id'];
	}
	}
	$av=$av-$value11[2];
	mysqli_query($d,"UPDATE food_items SET availability=$av WHERE id=$id1");

}
$coins1=$a;
$coins1=$coins1-$b;
mysqli_query($d,"UPDATE student SET coins=$coins1 WHERE username='$q'");
echo "your order is placed    ur order no. is ";
echo $id;
?>
<a href="mess_placeorder1_student_backend.php">main page</a>