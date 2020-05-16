<?php
session_start();
if($_SESSION["admin"]==""){
	header('location:"mess_login.php');
}
//$id=$_GET["id"];
$q=$_SESSION["admin"];
$d=mysqli_connect('localhost','root','');
$e=mysqli_select_db($d,'mess');
$a=0;
if(is_array($_COOKIE['item'])){
	$a=$a+1;
}
if($a==0){
	echo "no item in cart";
}
else{
	?>
	<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<style>
	.largebox{
	width:100%;
	height:39px;
	padding:8px 10px;
	cursor:auto;
}
.scroll {  
    background-color: green;  
    width: 100%;  
    height: 39px;
    padding:7px 20px;
    margin:10px 0px;
 cursor:pointer;   
 color:#FFFFFF  
     
}  

.scroll1{
	background-color: red;  
    width: 150px;  
    height: 39px;
    padding:7px 20px;
    margin:10px 0px;
 cursor:pointer;
}

.background{
	background-image: url(shopping_cart.png);
	background-repeat: no-repeat;  
	background-attachment: fixed;  
	background-position: center;
	opacity: 0.8; 

}
</style>
	<body class="background">
	<form method="post" action="">
	<table class="table table-dark table-striped" style="padding-left:30px;">
		<thead>
		<tr>
			<th>FOOD ITEM</th>
			<th>PRICE</th>
			<th>QUANTITY</th>
			<th>TOTAL PRICE</th>
		</tr>
	</thead>
	<tbody>
		<?php
			foreach ($_COOKIE['item'] as $name => $value) {
				$values11=explode("__",$value);
				?>
			
				<tr>

				<td><?php	
				echo $values11[0]; ?></td>
				
				<td> <?php	
				echo $values11[1]; ?></td>
				
				
				<td> <?php	
				echo $values11[2]; ?></td>
				

				<td> <?php	
				echo $values11[3]; ?></td>
				
				<td><input type="submit" name="delete<?php echo $name;?>" value="DELETE" id="s3" class="scroll1"></td></tr>			
				<?php

			}
		?>
	</tbody>
	</table>
	</form>
	<br><br>

		
			
				<p style="padding-left: 50px;"><font size="6" align="center"><b>SUBTOTAL</b></font></p>
				<?php
				if(is_array($_COOKIE['item'])){
				$total=0;
				foreach ($_COOKIE['item'] as $name => $value) 
				{
					$values11=explode("__",$value);
					$total=$total+$values11[3];
				}}
				?>
			<p style="padding-left: 90px";><font size="7"><b><?php echo $total; $_SESSION["total"]=$total;?></b></font>
				<?php
				$e1=mysqli_query($d,"select * from student");
				while($e2=mysqli_fetch_array($e1))
				{
					if($e2['username']==$q){
		
						$coins=$e2['coins'];
					}
				}
				
				$_SESSION["coins"]=$coins;
				//echo $_SESSION["coins"];
				if($coins<$total){
				?>
				<p style="padding: 30px"><font size="6" color="red"><b>NOT ENOUGH COINS</b></font></p>
			<?php }
			else{ ?>
			<p style="padding: 30px"><button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal">CHECKOUT</button></a> <?php } ?> 	
			<p style="padding: 30px"><a href="mess_placeorder1_student_backend.php"><button type="button" class="btn btn-success btn-lg btn-block">MOVE TO ITEM LIST</button></a></p>
		
</body>



<div class="container">
  <!-- Trigger the modal with a button -->


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><b><font align="center" size="4">CHECKOUT</font></b></h4>
        </div>
        <div class="modal-body">
          <form method="post" action="checkout_backend.php">
          	<div class="table-responsive-sm">
        <table>
        	<tr>
			<td><b><font size="4">FIRSTNAME</font></b></td>
			<td><input type="text" name="firstname" class="largebox" placeholder="ENTER YOUR NAME"/></td>
		</tr>
		<tr>
			<td><br><b><font size="4">RoomNo</font></b></td>
			<td><br><input type="text" name="room" class="largebox" placeholder="ENTER YOUR ROOM NO."/></td>
		</tr>
		<tr>
			<td><br><b><font size="4">YOUR SECURITY PIN</font></b></td>
			<td><br><input type="text" name="pin" class="largebox" placeholder="ENTER SECURITY PIN"/></td>
		</tr>
		
        </table>
		</div>
        </div>
        <div class="modal-footer">
          <input type="submit" class="scroll" value="PLACE ORDER"/>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
</html>



<?php }
if(is_array($_COOKIE['item']))              //delete code
{
	foreach($_COOKIE['item'] as $name => $value)
	{
		if(isset($_POST["delete$name"]))
		{
			setcookie("item[$name]","",time()-1800);
			?>
			<script type="text/javascript">
				window.location.href=window.location.href=;
			</script>
			<?php
		}
	}
} 
?>