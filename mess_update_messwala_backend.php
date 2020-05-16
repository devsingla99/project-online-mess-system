<html>
<style type="text/css">
	.largebox{
width:399px;
height:39px;
padding:8px 10px;
cursor:auto;
}
.scroll {  
    background-color: #69A74E;  
    width: 194px;  
    height: 39px;
    padding:7px 20px;
    margin:10px 0px;
 cursor:pointer;   
 color:#FFFFFF  
     
}  

</style>
<body bgcolor="pink">
	<h1 align="center"><font size="7">KITNE ITEM HAE BHAI</font></h1>
	<br><br><br><br>
<form method="post" action="">
	<p align="center"><input type="text" class="largebox" name="availability" placeholder="AVAILABILITY" /></p>
	<br>
	<p align="center"><input type="submit" class="scroll" color="green"/></p>
</form>
</body>
</html>
<?php
session_start();

if($_SESSION["admin"]=="")
{
  header('location:mess_login_messwala.php');
}
$d=mysqli_connect('localhost','root','');
$e=mysqli_select_db($d,'mess');

$id=$_GET['id'];
if(isset($_POST['availability'])){
$avail=$_POST['availability'];
mysqli_query($d,"UPDATE food_items SET availability=$avail WHERE id=$id")or die(mysqli_error());

header("location:mess_deleteitem_messwala.php");
}
?>