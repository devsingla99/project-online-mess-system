<?php
session_start();
if($_SESSION["admin"]==""){
	header('location:mess_login.php');
}
else{
$q=$_SESSION["first"];
}
?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<style>
  .header{
    padding-left:20px;
  }
  .header1{
   padding-right:30px; 
   padding-top:30px;
  }
   </style>
<link href="facebook.css" rel="stylesheet" type="text/css"/>
<body>
<div class="container-fluid" style="background-color:orange;">
  <div class="table-responsive-sm">
  <table align="left">
      <tr><td class="header"><img src="chef.png" width="20%" height="20%" align="left"></td>
      <td><font size="4" align="left"><b>BOOKLAGI HAI KHANA DO..</b></font></td>
      </tr></table> </div>
      <div class="table-responsive-sm">
  <table align="right">
    <tr><td class="header1"><font size="3"><b>WELCOME <?php echo $q;?> </b></font></td></tr>
    <tr><td class="header1"><font size="3"><b><a href="logout.php">LOG OUT </a></b></font></td></tr>
    </table>
  </div>
</div>
<br><br><br><br>
<br><br><br><br><br>
<div class="container-fluid">
<div style="background:linear-gradient(white,#dfe3ee);">

<p><a href="mess_placeorder1_student_backend.php"><button type="button" class="btn btn-primary btn-lg btn-block">PLACE ORDERS</button></a>
<br><br><br><a href="mess_vieworder_student_backend.php"><button type="button" class="btn btn-success btn-lg btn-block">VIEW ORDER</button></a></p>

</div>
</div>

</body>
</html<a href="mess_placeorder1_student_backend.php">>