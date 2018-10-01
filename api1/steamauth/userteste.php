<?php
	require 'SteamConfig.php';
	$url = file_get_contents("http://api.steampowered.com/ISteamUserStats/GetUserStatsForGame/v0002/?appid=730&key=".$steamauth['apikey']."&steamid=".$_SESSION['steamid']); 
	$content = json_decode($url, true);
	echo $content['playerstats']['stats'][0]['name'];
	echo $content['playerstats']['stats'][0]['value'];
	echo "<br>";
	echo $content['playerstats']['stats'][1]['name'];
	echo $content['playerstats']['stats'][1]['value'];
?>

