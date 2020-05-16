<?php
session_start();
if($_SESSION["admin"]==""){
  header('location:"mess_login_messwala.php');
}
?>
<html>

<head>
	<script type="text/javaScript">
function see()
{
alert("CONFIRM OF GIVING COINS");
}
</script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<style>
  .background{
    background-color: black;
    background-image: url(coins.jpg);
  background-repeat: repeat;  
  background-attachment: fixed;  
  background-position: center;
  opacity: 0.8;
  }
</style>
<link href="facebook.css" rel="stylesheet" type="text/css"/>
<body class="background">
<br><br><br><br><br><br><br><br>
<div class="container">
 
  <div class="table-responsive-sm">          
  <table align="center">
  	<form method="post" action="mess_givecoins_messwala_backend.php">
    <tr>
    	<td><b><font size="5" COLOR="WHITE">USERNAME</b></td>
    	<td style="padding-left:90px;"><br><input type="text" class ="largebox" name="username" placeholder="USERNAME"></td>
    </tr>
    <tr>
    	<td><b><font size="5" COLOR="WHITE">NUMBER OF COINS</b></td>
    	<td style="padding-left:90px;"><br><input type="text" class ="largebox" name="coins" placeholder="COINS"></td>
    </tr>
    
    <tr><td><br></td><td></td></tr>
    <tr>
    	<td></td>
    	<td style="padding-left:90px;"><br><input type="submit" class="scroll" name="submit"  value="GIVE COINS" onclick="see()"/></td>
    </tr>
</form>
  </table>
  </div>
</div>

</body>
</html>
