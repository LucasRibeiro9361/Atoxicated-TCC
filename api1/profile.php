<?php
    require ('steamauth/steamauth.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Steam Profile</title>
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
		<h1>Steam profile</h1>
		<hr>
		<?php
if(!isset($_SESSION['steamid'])) {
    echo "<div style='margin: 30px auto; text-align: center;'>Welcome Guest! Please log in!<br>";
    loginbutton();
	echo "</div>";
	}  else {
    include ('steamauth/userInfo.php');

	?>
		<br>
		<br>
		<h4 style='margin-bottom: 3px; float:left;'>Perfil:</h4>
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
		</table>
<span style='float:left;'><?php logoutbutton(); ?></span>
		<?php
		}
		?>
		<hr>
		<div class="pull-right">
			<i>This page is powered by <a href="http://steampowered.com">Steam</a></i>
		</div>
	</div>
