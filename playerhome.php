<?php
include 'connect.php';
include 'config.php';
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
<div class="container">
		<div class="row">
			<div class="col-md-5" id="containerlogin">
			<div class="row">
				<div class="col-md-12">
					<?php
					if(isset($_SESSION["cdusuario"])){
					$id = $_SESSION["cdusuario"];
					$sql = "SELECT `id_usuario` FROM `tb_perfillol` WHERE `id_usuario` = '$id'";
					$result = $conn->query($sql);
						if ($result->num_rows > 0) {
						echo "<a href='perfillolparticular.php'<h4><center>Perfil League of Legends</center></a>";
				} else {echo "Você ainda não tem cadastro! <a href='Cadastroperfillol.php'> Cadastrar um perfil de League of Legends </a>";}
}else{ echo "Você não está logado! <a href='index.html'> Início </a>";}
					?>



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
