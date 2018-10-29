<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
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
		<h1>Perfil</h1>
		<span class="small pull-left" style="padding-right: 10px;">League of Legends</span>
		<hr>


<?php
include ('connect.php');
include ('config.php');
if(isset($_POST['nicknamelol'])){
$_SESSION['lolname'] = $_POST['nicknamelol'];
}

$id = $_SESSION["cdusuario"];
$sql = "SELECT `nick` FROM `tb_perfillol` WHERE `id_usuario` = '$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
$id2 = $row["nick"];
}
} else {
echo "0 results";
}

if(!isset($id2)) {
    echo "<html><div style='margin: 30px auto; text-align: center;'> Você ainda não nos deu seu nome de usuário!<br>
		<button><a href='nicknamelol.php'>Acessar outra página</a></button>";
	}  else {

  $url = file_get_contents("https://br1.api.riotgames.com/lol/summoner/v3/summoners/by-name/".$_SESSION['lolname'].$_SESSION['apikeylol']);
	$url1 = "https://avatar.leagueoflegends.com/br/".$_SESSION['lolname'].".png";
    $content = json_decode($url, true);

	$_SESSION['profilelol_name'] = $content['name'];
	$_SESSION['profilelol_level'] = $content['summonerLevel'];
  $_SESSION['profilelol_id'] = $content['id'];

  $lolprofile['lol_name'] = $_SESSION['profilelol_name'];
  $lolprofile['lol_level'] = $_SESSION['profilelol_level'];

  //-------------------------------------------------------------

  $url2 = file_get_contents("https://br1.api.riotgames.com/lol/league/v3/positions/by-summoner/".$_SESSION['profilelol_id'].$_SESSION['apikeylol']);
  $content2 = json_decode($url2, true);
  if($content2 == []){
  $elo = "Não possui Rank ainda!";
  }
  else{

  $_SESSION['profilelol_queueType'] = $content2[0]['queueType'];

  $lolprofile['lol_queueType'] = $_SESSION['profilelol_queueType'];

      if($lolprofile['lol_queueType'] == "RANKED_FLEX_SR"){
            $_SESSION['profilelol_rank'] = $content2[1]['tier'];
            $_SESSION['profilelol_rank1'] = $content2[1]['rank'];

        }else{
          $_SESSION['profilelol_rank'] = $content2[0]['tier'];
          $_SESSION['profilelol_rank1'] = $content2[0]['rank'];
        }

    $lolprofile['lol_rank'] = $_SESSION['profilelol_rank'];
    $lolprofile['lol_rank1'] = $_SESSION['profilelol_rank1'];

    $elo = $lolprofile['lol_rank']." ".$lolprofile['lol_rank1'];

//identificação do id do elo no banco
    $sql = "SELECT `cd_elolol` FROM `tb_elolol` WHERE `apielo` = '$elo'";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()) {
 $elo2 = $row["cd_elolol"];
   }
} else {
   echo "0 results";
}

//coloca o id pego anteriormente na tabela do perfil
$sql = "UPDATE `tb_perfillol` SET `id_elolol`=$elo2 WHERE 'id_usuario' = $id";
if ($conn->query($sql) === TRUE) {
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}}

$conn->close();
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

				<td><b>Icone de perfil</b></td>
				<td><img style="width: 100px; height: 100px" src="<?=$url1?>"></td>
        <td><a class="btn waves-effect waves-light" href="demo.php"><center>refresh</center></a></td>
			</tr>
      <tr>

				<td><b>ELO</b></td>
				<td><?=$elo?></td>
        <td><a class="btn waves-effect waves-light" href="nicknamelol.php"><center>Voltar</center></a></td>

			</tr>
				</tr>
		</table>
		<?php
  }
		?>
