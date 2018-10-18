<?php
if (empty($_SESSION['steam_uptodate']) or empty($_SESSION['steam_personaname'])) {
	require 'SteamConfig.php';
		$url = file_get_contents("http://api.steampowered.com/ISteamUserStats/GetUserStatsForGame/v0002/?appid=730&key=".$steamauth['apikey']."&steamid=".$_SESSION['steamid']);
	$content = json_decode($url, true);
	if (isset($csgostats['cs_total_kills'])) {


	$csgostats['cs_total_kills']  = $content['playerstats']['stats'][0]['value'];
	$csgostats['cs_total_deaths'] = $content['playerstats']['stats'][1]['value'];
	$csgostats['cs_total_hours'] = $content['playerstats']['stats'][2]['value'];
	$csgostats['cs_total_headshots'] = $content['playerstats']['stats'][25]['value'];
	$csgostats['cs_total_kills_ak'] = $content['playerstats']['stats'][20]['value'];
	$csgostats['cs_total_kills_awp'] = $content['playerstats']['stats'][19]['value'];
	$csgostats['cs_total_kills_m4a1'] = $content['playerstats']['stats'][171]['value'];

}




/*
total hs = 25

last match stt = 90~95
*/
}
?>
