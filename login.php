<?php
include 'config.php';
?>
<!doctype html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="js/bootstrap.min.js">
	<link rel="stylesheet" href="js/jquery.min.js">
	<link rel="stylesheet" href="js/popper.min.js">
	<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" href="css/materialize/css/materialize.min.css">
	<link rel="stylesheet" href="css/materialize/css/materialize.css">
<meta charset="utf-8">
<style>
body{background-image: url(img/background.jpg);}
</style>
</head>
<body>
	<form action="loginok.php" method="post">
		<!-- NAV -->
		<nav>
		  <div class="nav-wrapper menu-pika">
		    <a href="#!" id="logo-menu" >aToxicated</a>
		    <ul class="right hide-on-med-and-down">
		      <li ><a class="menu-text" href="cadastroplayer.php">Cadastro</a></li>
		      <li><a class="menu-text" href="login.php">Login</a></li>
		      <!-- Dropdown acionador -->
		      <li class="white">-------------------------</li>
		    </ul>
		  </div>
		</nav>
		<!-- fim do nav-->
<div class="container">
		<div class="row">
			<div class="col-md-6" id="containerlogin">
				<div class="row">
						<div class="col-md-12" id="containericonlogin">
							<center>	<img src="img/iconlogin.png" id="iconimg"></center>
						</div>
				</div>
			<div class="row">
				<div class="col-md-12">
					<h4><center>LOGIN</center></h4>
				</div>
			</div>
			<div class="row justify-content-md-center">
				<div class="col-md-10">
					<i class="fas fa-user loginform"></i>
					<input class="formulario" type="text" name="login" placeholder="Digite o seu login" required>
				</div>
			</div>
			<div class="row justify-content-md-center">
				<div class="col-md-10">
					<i class="fas fa-lock loginform"></i>
					<input class="formulario" type="password" name="senha" placeholder="Digite a sua senha" required>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<center>
						<input class="btn waves-effect waves-light" type="submit" name="submit" value="Enviar">
						<input class="btn waves-effect waves-light" type="reset" value="Reset">
						<a class="btn waves-effect waves-light" href="pagina inicial.php"><center>Voltar</center></a>
					</center>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<center><a id="linkcadastro" href="cadastroplayer.php">Novo? Cadastre-se aqui</a></center>
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
