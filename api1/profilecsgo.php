<?php
    require ('steamauth/steamauth.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pagina de teste</title>
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
		<h1>perfil</h1>
		<span class="small pull-left" style="padding-right: 10px;">perfil</span>
		<hr>
		<?php
if(!isset($_SESSION['steamid'])) {
    echo "<div style='margin: 30px auto; text-align: center;'>Bem vindo!<br>";
    loginbutton();
	echo "</div>";
	}  else {
    include ('steamauth/userInfo.php');
    include ('steamauth/userInfo2.php');
	?>

		<br>
		<br>
		<h4 style='margin-bottom: 3px; float:left;'>Steam WebAPI-Output:</h4><span style='float:right;'><?php logoutbutton(); ?></span>
		<table class='table table-striped'>
      <tr>
        <td><b>Variable name</b></td>
        <td><b>Value</b></td>
        <td><b>Description</b></td>
      </tr>
      <tr>
        <td>$steamprofile['steamid']</td>
        <td><?php echo $steamprofile['steamid'];?></td>
        <td>SteamID64 of the user</td>
      </tr>
      <tr>
        <td>$steamprofile['personaname']</td>
        <td><?php echo $steamprofile['personaname'];?></td>
        <td>Public name of the user</td>
      </tr>
      <tr>
        <td>$steamprofile['lastlogoff']</td>
        <td><?php
        $timestamp=$steamprofile['lastlogoff'];;
        echo gmdate("Y-m-d\ H:i:s\ ", $timestamp);
        ?></td>
        <td>
          oi
        </td>
      </tr>
      <tr>
        <td>$steamprofile['profileurl']</td>
        <td><?php echo $steamprofile['profileurl'];?></td>
        <td>Link to the user's profile</td>
      </tr>
      <tr>
        <td>$steamprofile['personastate']</td>
        <td><?php echo $steamprofile['personastate'];?></td>
        <td>0 - Offline, 1 - Online, 2 - Busy, 3 - Away, 4 - Snooze, 5 - looking to trade, 6 - looking to play</td>
      </tr>
      <tr>
        <td>$steamprofile['avatarfull']</td>
        <td>
          <img src='<?php echo $steamprofile['avatarfull']?>'><br>
        </td>
        <td>Address of the user's 184x184px avatar</td>
      </tr>
				<tr>
				<td>Abates Totais</td>
				<td>
          <?php
        if (isset($csgostats['cs_total_kills'])) {
          echo $csgostats['cs_total_kills'];}
        ?>
      </td>

			</tr>
				<tr>
				<td>Morte Totais</td>
				<td><?php
        if (isset($csgostats['cs_total_deaths'])) {
        echo $csgostats['cs_total_deaths'];}?></td>

			</tr>
			<tr>
				<td>Relacão Abates/Mortes</td>
				<td><?php if (isset($csgostats['cs_total_kills'])) {
          $marlene = $csgostats['cs_total_kills']/$csgostats['cs_total_deaths'];
				echo substr ($marlene, 0, 4);}?></td>

			</tr>
				<td>Horas Jogadas</td>
				<td><?php
        if (isset($csgostats['cs_total_hours'])) {
				 $total2 = $csgostats['cs_total_hours'];

				/* Transforma segundos em formato de data*/
				$horas = floor($total2 / 3600);
				$minutos = floor(($total2 - ($horas * 3600)) / 60);
				$segundos = floor($total2 % 60);
				echo $horas . "h " . $minutos . "m " . $segundos . "s ";
      }	?>

</td>

			</tr>
			<tr>
				<td>Porcentagem de tiros na cabeça</td>
				<td><?php
        if (isset($csgostats['cs_total_headshots'])) {
        $marlene3 = $csgostats['cs_total_headshots']/$csgostats['cs_total_kills'];
					echo substr($marlene3*100,0,2)."%";
				}?></td>

			</tr>
			<tr>
				<td>Abates com AK-47</td>
				<td><?php
        if (isset($csgostats['cs_total_kills_ak'])) {
        echo $csgostats['cs_total_kills_ak'];}?></td>

			</tr>
			<tr>
				<td>Abates com AWP</td>
				<td><?php
        if (isset($csgostats['cs_total_kills_awp'])) {
        echo $csgostats['cs_total_kills_awp'];}?></td>

			</tr>
					<tr>
				<td>Abates com m4a1</td>
				<td><?php
        if (isset($csgostats['cs_total_kills_m4a1'])) {
        echo $csgostats['cs_total_kills_m4a1'];}?></td>

			</tr>
		</table>
		<?php
		}
		?>
		<hr>
		<div class="pull-right">

		</div>


	</div>
