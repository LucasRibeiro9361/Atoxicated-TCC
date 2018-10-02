<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perfil League of Legends</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

    <style>
        .table {
            table-layout: fixed;
            word-wrap: break-word;
        }
    </style>
  </head>
  <body style="background-color: #EEE;">
    <div class="container" style="margin-top: 30px; margin-bottom: 30px; padding-bottom: 10px; background-color: #FFF;">
		<h1>Pagina de testes</h1>
		<span class="small pull-left" style="padding-right: 10px;">League of Legends</span>
		<hr>

		<form method="post" action="demo.php">
			Insira seu nome de usuário<br><input type="text" name="nicknamelol"><br><br>
			<input type="submit" value="Acessar perfil">
		</form>
		</div>
<?php

if (isset($_POST['nicknamelol'])){

header('location: demo.php');


}



	?>

	</body>
	</html>
