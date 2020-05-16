<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script>

$(document).ready(function() {

    $("#img1").css("opacity", 0.5);

    $("#img1").hover(function() {

        $(this).animate({opacity: 1.0}, 500);

    }, function() {

        $(this).animate({opacity: 0.5}, 500);

    });

});
  	
$(document).ready(function() {

    $("#img2").css("opacity", 0.5);

    $("#img2").hover(function() {

        $(this).animate({opacity: 1.0}, 500);

    }, function() {

        $(this).animate({opacity: 0.5}, 500);

    });

});




  </script>




</head>
<style>
	.img{
		background-image: url(Chef3.png);
		opacity: 0.7;
	}
	.img2{
		background-image: url(College-Student.jpg);
		opacity: 0.7;
	}
</style>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
			<table height="100%">
<tr><td class="img-fluid"><a href="mess_login_messwala.php"><img src="chef3.png" height="100%" width="100%" id="img1"></a></td>
<td class="img-fluid"><a href="mess_login.php"><img src="student.png" height="100%" width="100%" id="img2"></a></td></tr>
</table>
</div>
</div>
</div>
</body>
</html>