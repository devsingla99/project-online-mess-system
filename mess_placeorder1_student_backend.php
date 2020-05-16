<html>
<head>
  <title>ITEMS1</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   <script type = "text/javascript"></script>
  <style>
</style></head></html>
<?php
session_start();
if($_SESSION["admin"]==""){
	header('location:"mess_login.php');
}
else{
$d=mysqli_connect('localhost','root','');
$e=mysqli_select_db($d,'mess');
$a=$_SESSION["admin"];
$result= mysqli_query($d,"select * from (student) where username='$a'");
if($row=mysqli_fetch_array($result))
{
$_SESSION["coins"]=$row["coins"];
}
$q=$_SESSION["first"];
$x=$_SESSION["coins"];
}
$d=mysqli_connect('localhost','root','');
$e=mysqli_select_db($d,'mess');
$result=mysqli_query($d,"select * from food_items");
/*if(isset($_POST["submit"])){
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
}
$res3=mysqli_query($d,"select * from food_items where id='$id'");
// to set item description
while($row3=mysqli_fetch_array($res3)){
	$nm=$row["name"];
	$price=$row["price"];
	$qty="1";
	$total=$price*$qty;
}
setcookie("item[$id]",$nm."__".$price."__".$qty."__".$total,time()+1800);
*/
?>
<html>
<div class="container-fluid" style="background-color:orange;">
  <div class="table-responsive-sm">
  <table align="left">
      <tr><td class="header"><img src="chef.png" width="20%" height="20%" align="left"></td>
      <td><font size="4" align="left"><b>KYA KHANNA BATAO???</b></font></td>
      </tr></table> </div>
      <div class="table-responsive-sm">
  <table align="right">
    <tr><td class="header1"><font size="3"><b>WELCOME <?php echo $q;?> </b></font></td></tr>
    <tr><td class="header1"><font size="3"><b><a href="logout.php">LOG OUT </a></b></font></td></tr>
    <tr><td><img src="coins.jfif" width="30%" height="30%"><font size="5"><b><?php echo $x; ?></b></font></td>
    	
    </table>
  </div>
</div>
<br><br>
<form name="form1" method="post" action="cart.php">
<table class="table table-dark table-hover">
	<tr>
		<th>ID</th>
		<th>NAME</th>
		<th>PRICE</th>
		<th>AVAILABILITY</th>
		<th>ADD TO CART</th>
	</tr>
<?php	while($product= mysqli_fetch_assoc($result)){  ?>
	<tr>
		<td><?php echo $product['id'];?></td>
		<td><?php echo $product['name'];?></td>
		<td><?php echo $product['price'];?></td>
		<td><?php echo $product['availability'];?></td>
		<td><?php echo"<a href='cart.php?id=$product[id]'>ADD TO CART</a>";?></td>
	</tr>
	<?php } ?>
</table>
</form>
<br>
<a href="cart1.php"><button type="button" class="class=btn btn-success btn-lg btn-block">VIEW CART</button></a>
<br><br><br>


</html>