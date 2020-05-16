<?php
session_start();

if($_SESSION["admin"]=="")
{
  header('location:mess_login_messwala.php');
}

$d=mysqli_connect('localhost','root','');
$e=mysqli_select_db($d,'mess');
$result=mysqli_query($d,"select * from food_items");

?>
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

<html>
<h1 align="center"><font size="7"><b>ITEM LIST</b></font></h1>
<form name="form1" method="post" action="mess_update_messwala_backend.php">
<table class="table table-dark table-hover">
  <tr>
    <th>ID</th>
    <th>NAME</th>
    <th>PRICE</th>
    
    <th>DELETE</th>
    <th>UPDATE</th>
  </tr>
<?php while($product= mysqli_fetch_assoc($result)){  ?>
  <tr>
    <td><?php echo $product['id'];?></td>
    <td><?php echo $product['name'];?></td>
    <td><?php echo $product['price'];?></td>
    
    <td><?php echo"<a href='mess_deleteitem_messwala_backend.php?id=$product[id]'>DELETE</a>";?></td>
    <td><?php echo"<a href='mess_update_messwala_backend.php?id=$product[id]'>UPDATE</a>";?></td>
    </tr>
  <?php } ?>
</table>
</form>
<br>
<p><br><a href="mess_additem_messwala.php"><button type="button" class="btn btn-success btn-lg btn-block">ADD ITEMS</button></a></p>
</html>
