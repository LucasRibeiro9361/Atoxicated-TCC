<?php
include 'config.php';
include 'api1/steamauth/userInfo.php';
include 'api1/steamauth/userInfo2.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post">
      Voce procura parceiros para:
      <select name="objetivo">
        <option value="lazer">Lazer</option>
        <option value="ranqueada">Partidas Competitivas</option>
        <option value="campeonato">Campeonato</option>
      </select><br>
      De que estado voce é:
      <select name="estado">
        <option value="AC">AC</option>
  			<option value="AL">AL</option>
  			<option value="AP">AP</option>
  			<option value="AM">AM</option>
  			<option value="BA">BA</option>
  			<option value="CE">CE</option>
  			<option value="DF">DF</option>
  			<option value="ES">ES</option>
  			<option value="GO">GO</option>
  			<option value="MA">MA</option>
  			<option value="MT">MT</option>
  			<option value="MS">MS</option>
  			<option value="MG">MG</option>
  			<option value="PA">PA</option>
  			<option value="PB">PB</option>
  			<option value="PR">PR</option>
  			<option value="PE">PE</option>
  			<option value="PI">PI</option>
  			<option value="RJ">RJ</option>
  			<option value="RN">RN</option>
  			<option value="RS">RS</option>
  			<option value="RO">RO</option>
  			<option value="RR">RR</option>
  			<option value="SC">SC</option>
  			<option value="SP">SP</option>
  			<option value="SE">SE</option>
  			<option value="TO">TO</option>
      </select><br>
      Selecione suas melhores funções dentro de jogo:<br>
      <select name="camp1">
        <option value="1">Entry Fragger</option>
        <option value="2">Awper</option>
        <option value="3">Suporte</option>
        <option value="4">Lurcker</option>
        <option value="5">Capitão/IGL</option>
      </select>
      <select name="camp2">
        <option value="1">Entry Fragger</option>
        <option value="2">Awper</option>
        <option value="3">Suporte</option>
        <option value="4">Lurcker</option>
        <option value="5">Capitão/IGL</option>
      </select>
      Seu Skill Level da gamersclub
      <select name="lvlgc">
        <option value="0">Não possuo level</option>
        <option value="1">level 1</option>
        <option value="2">level 2</option>
        <option value="3">level 3</option>
        <option value="4">level 4</option>
        <option value="5">level 5</option>
        <option value="6">level 6</option>
        <option value="7">level 7</option>
        <option value="8">level 8</option>
        <option value="9">level 9</option>
        <option value="10">level 10</option>
        <option value="11">level 11</option>
        <option value="12">level 12</option>
        <option value="13">level 13</option>
        <option value="14">level 14</option>
        <option value="15">level 15</option>
        <option value="16">level 16</option>
        <option value="17">level 17</option>
        <option value="18">level 18</option>
        <option value="19">level 19</option>
        <option value="20">level 20</option>
      </select><br>
      Patente de partidas competitivas (matchmaking)
      <select name="patente">
      <option value="1">Prata 1</option>
      <option value="2">Prata 2</option>
      <option value="3">Prata 3</option>
      <option value="4">Prata 4</option>
      <option value="5">Prata 5</option>
      <option value="6">Prata Elite Mestre</option>
      <option value="7">Ouro 1</option>
      <option value="8">Ouro 2</option>
      <option value="9">Ouro 3</option>
      <option value="10">Ouro Mestre</option>
      <option value="11">Guardião Mestre 1</option>
      <option value="12">Guardião Mestre 2</option>
      <option value="13">Guardião Mestre Elite</option>
      <option value="14">Águia Lendária</option>
      <option value="16">Águia Lendária Mestre</option>
      <option value="17">Supremo Mestre de Primeira Classe</option>
      <option value="18">A Elite Global</option>

    </select><br>
    <input type="submit" name="ENVIAR">
    <?php
include 'connect.php';
if(isset($_POST['objetivo'])){
    $objetivo=$_POST['objetivo'];
    $estado=$_POST['estado'];
    $funcao1=$_POST['camp1'];
    $funcao2=$_POST['camp2'];
    $lvlgc=$_POST['lvlgc'];
    $patente=$_POST['patente'];
    $usuario=$_SESSION["cdusuario"];

    $url = file_get_contents("https://br1.api.riotgames.com/lol/summoner/v3/summoners/by-name/".$_SESSION['lolname'].$_SESSION['apikeylol']);
    $content = json_decode($url, true);
  	$_SESSION['profilelol_id'] = $content['id'];
    $idlol = $_SESSION['profilelol_id'];
    $sql = "INSERT INTO tb_perfillol values ('','$nick','$objetivo','$estado','$camp1','$camp2','$camp3','$camp4','$camp5','$elo','$lane1','$lane2','$usuario',null,'$idlol','0')";
    if ($conn->query($sql) === TRUE) {
      echo "<button type='button'><a href=perfillolparticular.php>Cadastro realizado com sucesso! Visite seu perfil</a></button>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }}

    ?>
    </form>
  </body>
</html>
