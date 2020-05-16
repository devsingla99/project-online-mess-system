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
	<style>
		.class background1{
		background:linear-gradient(white,#dfe3ee);}
	</style>
<br><br><br>
<?php
$d=mysqli_connect('localhost','root','');
$e=mysqli_select_db($d,'mess');
$e1=mysqli_query($d,"select * from student");
?>

    <table>
    	<tr><td><img src="chef.png" width="20%" height="20%" align="right"></td>
    		<td><font size="8"><b>MESSWALA.COM</b></font></td>
    	</tr></table> 
    </table>
  <br>

<div class="container-fluid">
	
<div class="table-responsive-sm">
<table align ="right">
<form method="post" action="mess_signup_student_backend.php">
<tr><td style="padding-right:90px;"><b><font size="6">Create an account</font></b></td></tr>
<tr><td style="padding-right:90px;"><font size="4">Its free and always will be.</font></td></tr><br>
<tr><td style="padding-right:90px;"><br><input type="text" class="smallbox" name="firstname" placeholder="First  Name"/> &nbsp;&nbsp;&nbsp;<input type="text" class ="smallbox" name="lastname" placeholder="Surname"/></td></tr>

<tr><td style="padding-right:90px;"><br><input type="text" class ="largebox" name="username" placeholder="Username"></td></tr>
<tr><td style="padding-right:90px;"><br><input type="text" class ="largebox" name="password" placeholder="New Password"></td></tr>

<tr><td style="padding-right:90px;"><br><label class="grey">Gender</label></td></tr>
<tr><td style="padding-right:90px;"><input type="radio" name="gender"/><label class="label1">Female </label>&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" class="radio1" name="r"/><label class="label1">Male</label> &nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" class="radio1" name="r"/><label class="label1">Custom</label></td>
</tr>
<tr><td style="padding-right:90px;"><label class="condition">By clicking Sign Up, you agree to our Terms, Data Policy and <br> Cookie Policy. You may receive SMS notifications from us and <br> can opt out at any time.</label></td></tr>
<tr><td style="padding-right:90px;"><input type="submit" class="scroll" name="submit"  value="Sign Up" value /></td></tr>
</form>
</table>
</div>
</div>

<div class="container-fluid">
<div class="table-responsive-sm">
<table align ="left">
<form method="post" action="mess_login_student_backend.php">
<tr><td  style="padding-left:90px;"><b><font size="6">Log In</b></td></tr>
<tr><td style="padding-left:90px;"><br><input type="text" class ="largebox" name="username" placeholder="Username"></td></tr>
<tr><td style="padding-left:90px;"><br><input type="text" class ="largebox" name="password" placeholder="Password"></td></tr>
<tr><td style="padding-left:90px;"><br><input type="submit" class="scroll" name="submit"  value="Log In" value /></td></tr>
</form>
</table>
</div>
</div>

</body>
</html>