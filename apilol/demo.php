<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perfil League of Legends</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .table {
            table-layout: fixed;
            word-wrap: break-word;
        }
    </style>
  </head>
  <body style="background-color: #EEE;">
    <div class="container" style="margin-top: 30px; margin-bottom: 30px; padding-bottom: 10px; background-color: #FFF;">
		<h1>Perfil</h1>
		<span class="small pull-left" style="padding-right: 10px;">League of Legends</span>
		<hr>


<?php

include ('config.php');
$oi = $_POST['nicknamelol'];
$_SESSION['lolname'] = $oi;
if(!isset($_SESSION['lolname'])) {
    echo "<html><div style='margin: 30px auto; text-align: center;'> Você ainda não nos deu seu nome de usuário!<br>
		<button><a href='nicknamelol.php'>Acessar outra página</button>";
	}  else {

$url2 = file_get_contents("https://br1.api.riotgames.com/lol/league/v3/positions/by-summoner/".$_SESSION['profilelol_id']."?api_key=RGAPI-388448da-2767-4841-a3cb-d3da94038b83");
  $url = file_get_contents("https://br1.api.riotgames.com/lol/summoner/v3/summoners/by-name/".$_SESSION['lolname']."?api_key=RGAPI-388448da-2767-4841-a3cb-d3da94038b83");
	$url1 = "https://avatar.leagueoflegends.com/br/".$_SESSION['lolname'].".png";
		$content = json_decode($url, true);
    $content2 = json_decode($url2, true);
	$_SESSION['profilelol_name'] = $content['name'];
	$_SESSION['profilelol_id'] = $content['id'];
	$_SESSION['profilelol_level'] = $content['summonerLevel'];
  $_SESSION['profilelol_rank'] = $content2[0]['tier'];
    $_SESSION['profilelol_rank1'] = $content2[0]['rank'];

$lolprofile['lol_name'] = $_SESSION['profilelol_name'];
$lolprofile['lol_level'] = $_SESSION['profilelol_level'];
$lolprofile['lol_id'] = $_SESSION['profilelol_id'];
$lolprofile['lol_rank'] = $_SESSION['profilelol_rank'];
$lolprofile['lol_rank1'] = $_SESSION['profilelol_rank1'];

?>



		<br>
		<br>

		<table class='table table-striped'>
			<tr>
				<td><b>Nome</b></td>
				<td><?=$lolprofile['lol_name']?></td>
			</tr>
			<tr>

				<td><b>Nível</b></td>
				<td><?=$lolprofile['lol_level']?></td>
			</tr>
      <tr>

        <td><b>ID</b></td>
        <td><?=$lolprofile['lol_id']?></td>
      </tr>
				<tr>

				<td><b>Icone de perfil</b></td>
				<td><img style="width: 100px; height: 100px" src="<?=$url1?>"></td>
			</tr>
      <tr>

				<td><b>ELO</b></td>
				<td><?=$lolprofile['lol_rank'].$lolprofile['lol_rank1']?></td>
        <td><a class="btn waves-effect waves-light" href="nicknamelol.php"><center>Voltar</center></a></td>
			</tr>
				</tr>
		</table>
		<?php
		}
		?>
