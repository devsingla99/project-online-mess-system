<?php
session_start();

if($_SESSION["admin"]==""){
  header('location:"mess_login_messwala.php');
}

$d=mysqli_connect('localhost','root','');
$e=mysqli_select_db($d,'mess');
$id=$_GET['id'];
$result=mysqli_query($d,"select * from orders WHERE order_id=$id");

?>
<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<h1  align="center"><b><font size="7">ORDER ITEMS</font></b></h1>
<form >
<table class="table">
  <tr class="table-success">
    <th>NAME</th>
    <th>PRICE</th>
    <th>QUANTITY</th>
    <th>TOTAL</th>
  </tr>
  <br>
<?php while($product= mysqli_fetch_assoc($result)){  ?>
  <tr class="table-warning">
    <td><?php echo $product['name'];?></td>
    <td><?php echo $product['price'];?></td>
    <td><?php echo $product['quantity'];?></td>
    <td><?php echo $product['total'];?></td>
  </tr>
  <?php } ?>
</table>
</form>
<br>

</html>