<?php
$d=mysqli_connect('localhost','root','');
$e=mysqli_select_db($d,'mess');
session_start();
$q=$_SESSION["admin"];
$result= mysqli_query($d,"select * from place_order where username='$q'");

?>

<html>
<head></head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<h1 align="center"><b>ORDERS</b></h1>
<form name="form1" method="post" action="cart.php">
<table class="table table-dark table-hover">
  <tr>
    <th>FIRSTNAME</th>
    <th>ROOM</th>
    <th>PIN</th>
    <th>VIEW DETAIL</th>
    <th>STATUS</th>
  </tr>
<?php while($product= mysqli_fetch_assoc($result)){  ?>
  <tr>
    <td><?php echo $product['firstname'];?></td>
    <td><?php echo $product['room'];?></td>
    <td><?php echo $product['pin'];?></td>
    <td><?php echo"<a href='mess_orderdetails_messwala.php?id=$product[id]'>ORDER DETAILS</a>";?></td>
    <?php if($product['status']==1){ ?>
    <td>READY</td>
  <?php } 
  else{ ?>
<td> NOT YET READY</td>
<?php } ?>  
  </tr>
  <?php } ?>
</table>
</form>
<br>

</html>
