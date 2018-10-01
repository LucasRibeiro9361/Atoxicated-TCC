<?php
    require ('steamauth/steamauth.php');  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SteamAuth Demo</title>
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
		<h1>SteamAuth Demo</h1>
		<span class="small pull-left" style="padding-right: 10px;">for SteamAuth 3.2</span>
		<hr>
		<?php
if(!isset($_SESSION['steamid'])) {
    echo "<div style='margin: 30px auto; text-align: center;'>Welcome Guest! Please log in!<br>";
    loginbutton();
	echo "</div>";
	}  else {
    include ('steamauth/userInfo2.php');
	?>	
		<div style='float:left;'>
			<a href='https://github.com/SmItH197/SteamAuthentication'>
				<button class='btn btn-success' style='margin: 2px 3px;' type='button'>GitHub Repo</button>
			</a>
			<a href='https://github.com/SmItH197/SteamAuthentication/releases'>
				<button class='btn btn-warning' style='margin: 2px 3px;' type='button'>Download</button>
			</a>
		</div>
		<br>
		<br>
		<h4 style='margin-bottom: 3px; float:left;'>Steam WebAPI-Output:</h4><span style='float:right;'><?php logoutbutton(); ?></span>
		<table class='table table-striped'>
				<tr>
				<td>Kills</td>
				<td><?php echo $csgostats['cs_total_kills'];?></td>
				<td>Abates Totais</td>
			</tr>
				<tr>
				<td>Deaths</td>
				<td><?php echo $csgostats['cs_total_deaths'];?></td>
				<td>Morte Totais</td>
			</tr>
			<tr>
				<td>KD</td>
				<td><?php $marlene = $csgostats['cs_total_kills']/$csgostats['cs_total_deaths'];  
				echo substr ($marlene, 0, 4); ?></td>
				<td>Relacão Abates/Mortes</td>
			</tr>
				<td>Horas Jogadas</td>
				<td><?php

				 $total2 = $csgostats['cs_total_hours'];

				/* Transforma segundos em formato de data*/
				$horas = floor($total2 / 3600);
				$minutos = floor(($total2 - ($horas * 3600)) / 60);
				$segundos = floor($total2 % 60);
				echo $horas . "h " . $minutos . "m " . $segundos . "s ";
					?>
	
</td>
				<td>Horas jogadas no lixo</td>
			</tr>
			<tr>
				<td>Porcentagem de tiros na cabeça pau</td>
				<td><?php $marlene3 = $csgostats['cs_total_headshots']/$csgostats['cs_total_kills'];
					echo substr($marlene3*100,0,2)."%";
				?></td>
				<td>Morte Totais</td>
			</tr>
			<tr>
				<td>Abates com AK-47</td>
				<td><?php echo $csgostats['cs_total_kills_ak']; ?></td>
				<td>Morte Totais</td>
			</tr>
			<tr>
				<td>Abates com AWP</td>
				<td><?php echo $csgostats['cs_total_kills_awp']; ?></td>
				<td>Morte Totais</td>
			</tr>
					<tr>
				<td>Abates com m4a1</td>
				<td><?php echo $csgostats['cs_total_kills_m4a1']; ?></td>
				<td>Morte Totais</td>
			</tr>
		</table>
		<?php
		}    
		?>
		<hr>
		<div class="pull-right">
			<i>This page is powered by <a href="http://steampowered.com">Steam</a></i>
		</div>
		<a href="https://github.com/SmItH197/SteamAuthentication">GitHub Repo</a><br>
		Demo page by <a href="https://github.com/blackcetha" target="_blank">BlackCetha</a>
	</div>
	 