<?php
session_start();
if($_SESSION["admin"]==""){
	header('location:"mess_login.php');
}
//$id=$_GET["id"];
if(is_array($_COOKIE['item']))              //delete code
{
	foreach($_COOKIE['item'] as $name => $value)
	{
		if(isset($_POST["delete$name"]))
		{
			setcookie("item[$name]","",time()-1800);
		}
	}
}
header('location:cart1.php');
?>