<?php
session_start();
?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="js/bootstrap.min.js">
<link rel="stylesheet" href="js/jquery.min.js">
<link rel="stylesheet" href="js/popper.min.js">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/materialize/css/materialize.min.css">
<link rel="stylesheet" href="css/materialize/css/materialize.css">
<meta charset="utf-8">
</head>
<body>
	<form action="loginfunfando.php" method="post">
<div class="container">
		<div class="row">
			<div class="col-md-5" id="containerlogin">
			<div class="row">
				<div class="col-md-12">
					<a href="cadastroperfillol.php"<h4><center><?php echo $_SESSION["cdusuario"];?></center></h4>
				</div>
			</div>
			</div>

			</div>
		</div>
	</div>
</form>
</body>
<footer>
</footer>
</html>
