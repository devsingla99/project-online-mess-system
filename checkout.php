<?php
session_start();
if($_SESSION["admin"]==""){
	header('location:"mess_login.php');
}
?>
<!--<html>
<body>
	<form method="post" action="checkout_backend.php">
		<tr>
			<td>FIRSTNAME</td>
			<td><input type="text" name="firstname"/></td>
		</tr>
		<tr>
			<td>RoomNo</td>
			<td><input type="text" name="room"/></td>
		</tr>
		<tr>
			<td>YOUR SECURITY PIN</td>
			<td><input type="text" name="pin"/></td>
		</tr>
		<input type="submit"/>
	</form>
</body>
</html>

-->
<html>
<style type="text/css">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   <script type = "text/javascript"></script>
</style>
<body>


<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">CHECKOUT</h4>
      </div>
      <div class="modal-body">
      	<form method="post" action="checkout_backend.php">
        <table>
        	<tr>
			<td>FIRSTNAME</td>
			<td><input type="text" name="firstname"/></td>
		</tr>
		<tr>
			<td>RoomNo</td>
			<td><input type="text" name="room"/></td>
		</tr>
		<tr>
			<td>YOUR SECURITY PIN</td>
			<td><input type="text" name="pin"/></td>
		</tr>
		<input type="submit"/>
        </table>
	</form>
              </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">SUBMIT</button>
      </div>
    </div>

  </div>
</div>
</form>
</body>
</html>