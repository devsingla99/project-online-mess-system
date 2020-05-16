<?php
session_start();
if($_SESSION["admin"]==""){
  header('location:"mess_login_messwala.php');
}
?>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<link href="facebook.css" rel="stylesheet" type="text/css"/>
<body>
<br><br><br><br><br><br><br><br>
<div class="container">
 
  <div class="table-responsive-sm">          
  <table class="table table-bordered" align="center">
  	<form method="post" action="mess_additem_messwala_backend.php">
    <tr>
    	<td><b><font size="4">ITEM NAME</b></td>
    	<td style="padding-left:90px;"><br><input type="text" class ="largebox" name="item_name" placeholder="Item Name"></td>
    </tr>
    <tr>
    	<td><b><font size="4">PRICE</b></td>
    	<td style="padding-left:90px;"><br><input type="text" class ="largebox" name="price" placeholder="In Rs."></td>
    </tr>
    <tr>
    	<td><b><font size="4">Availability</b></td>
    	<td style="padding-left:90px;"><br><input type="text" class ="largebox" name="availability" placeholder="Availability"></td>
    </tr>
    <tr><td><br></td><td></td></tr>
    <tr>
    	<td></td>
    	<td style="padding-left:90px;"><br><input type="submit" class="scroll" name="submit"  value="ADD ITEM"/></td>
    </tr>
</form>
  </table>
  </div>
</div>

</body>
</html>
