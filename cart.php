<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>
</style></head></html>
<?php
session_start();
$d=mysqli_connect('localhost','root','');
$e=mysqli_select_db($d,'mess');
$id=$_GET["id"];
	$a=0;
	if(is_array($_COOKIE['item'])){
	
		foreach ($_COOKIE['item'] as $name => $value) {
			$a=$a+1;
		}
		$a=$a+1;
	}
	else{
		$a=$a+1;
	}
//echo $a;
$result=mysqli_query($d,"select * from food_items");
$res3=mysqli_query($d,"select * from food_items where id='$id'");
// to set item description

while($row = mysqli_fetch_assoc($res3))
{
	$nm=$row['name'];
	$price=$row['price'];
	$qty="1";
	$total=$price*$qty;
}
$flag=0;
if(is_array($_COOKIE['item']))
{
	
	foreach ($_COOKIE['item'] as $name => $value) 
	{
			$value11=explode("__", $value);
			$found=0;
			if($nm==$value11[0])
			{
				$found=$found+1;
				$qty=$value11[2]+1;
				$total=$qty*$value11[1];
				$tb_qty;
				$res=mysqli_query($d,"select * from food_items where id='$id'");
				while($row=mysqli_fetch_array($res))
				{
					$tb_qty=$row["availability"];
				}
				if($tb_qty<$qty)
				{
					$flag=1;
					echo "SORRY THIS MUCH NOT AVAILABLE";
				}
				else
				{
					$flag=0;
					setcookie("item[$id]",$nm."__".$price."__".$qty."__".$total."__",time()+1800);
				}
			}
	}
	if($found==0)
	{
			$tb_qty;
				$res=mysqli_query($d,"select * from food_items where id='$id'");
				while($row=mysqli_fetch_array($res))
				{
					$tb_qty=$row["availability"];
				}
				if($tb_qty<$qty)
				{
					$flag=1;
					echo "SORRY THIS MUCH NOT AVAILABLE";
				}
				else
				{
					$flag=0;
					setcookie("item[$id]",$nm."__".$price."__".$qty."__".$total."__",time()+1800);
				}
	}
		
}
else
{
		$tb_qty;
				$res=mysqli_query($d,"select * from food_items where id='$id'");
				while($row=mysqli_fetch_array($res))
				{
					$tb_qty=$row["availability"];
				}
				if($tb_qty<$qty)
				{
					$flag=1;
					echo "SORRY THIS MUCH NOT AVAILABLE";
				}
				else
				{
					$flag=0;
					setcookie("item[$id]",$nm."__".$price."__".$qty."__".$total."__",time()+1800);
				}
}

if($flag==0){
header('location:mess_placeorder1_student_backend.php');
?>
<script>
	alert("ADDED TO CART");
</script>
<?php } 

else if ($flag==1){
header('location:mess_placeorder1_student_backend.php');
?>
<script>
	alert("not this much quantity AVAILABLE");
</script>
<?php } //$_SESSION['username']=$_var['username']; ?>
