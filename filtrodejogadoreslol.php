<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="POST">
      Objetivo<select name="objetivo">
        <option value="">Todos</option>
        <option value="lazer">Lazer</option>
        <option value="ranqueada">Ranqueada</option>
        <option value="campeonato">Campeonato</option>
      </select><br>
      Estado<select name="estado">
        <option value="">Todos</option>
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
      Elo Minimo<select name="e1">
        <option value="">Todos</option>
  			<option value="1">SEM ELO</option>
  			<option value="2">Bronze V</option>
  			<option value="3">Bronze IV</option>
  			<option value="4">Bronze III</option>
  			<option value="5">Bronze II</option>
  			<option value="6">Bronze I</option>
  			<option value="7">Prata V</option>
  			<option value="8">Prata IV</option>
  			<option value="9">Prata III</option>
  			<option value="10">Prata II</option>
  			<option value="11">Prata I</option>
  			<option value="12">Ouro V</option>
  			<option value="13">Ouro IV</option>
  			<option value="14">Ouro III</option>
  			<option value="15">Ouro II</option>
  			<option value="16">Ouro I</option>
  			<option value="17">Platina V</option>
  			<option value="18">Platina IV</option>
  			<option value="19">Platina III</option>
  			<option value="20">Platina II</option>
  			<option value="21">Platina I</option>
  			<option value="22">Diamante V</option>
  			<option value="23">Diamante IV</option>
  			<option value="24">Diamante III</option>
  			<option value="25">Diamante II</option>
  			<option value="26">Diamante I</option>
  			<option value="27">Mestre</option>
  			<option value="28">Desafiante</option>
  		</select><br>
  		Elo Maximo<select name="e2">
        <option value="">Todos</option>
  			<option value="1">SEM ELO</option>
  			<option value="2">Bronze V</option>
  			<option value="3">Bronze IV</option>
  			<option value="4">Bronze III</option>
  			<option value="5">Bronze II</option>
  			<option value="6">Bronze I</option>
  			<option value="7">Prata V</option>
  			<option value="8">Prata IV</option>
  			<option value="9">Prata III</option>
  			<option value="10">Prata II</option>
  			<option value="11">Prata I</option>
  			<option value="12">Ouro V</option>
  			<option value="13">Ouro IV</option>
  			<option value="14">Ouro III</option>
  			<option value="15">Ouro II</option>
  			<option value="16">Ouro I</option>
  			<option value="17">Platina V</option>
  			<option value="18">Platina IV</option>
  			<option value="19">Platina III</option>
  			<option value="20">Platina II</option>
  			<option value="21">Platina I</option>
  			<option value="22">Diamante V</option>
  			<option value="23">Diamante IV</option>
  			<option value="24">Diamante III</option>
  			<option value="25">Diamante II</option>
  			<option value="26">Diamante I</option>
  			<option value="27">Mestre</option>
  			<option value="28">Desafiante</option>
  		</select><br>
      Lanes
      <select name="l1">
        <option value="">Todos</option>
        <option value="1">Topo</option>
        <option value="2">Selva</option>
        <option value="3">Meio</option>
        <option value="4">Atirador</option>
        <option value="5">Suporte</option>
      </select><br>
      Lanes
      <select name="l2">
        <option value="">Todos</option>
        <option value="1">Topo</option>
        <option value="2">Selva</option>
        <option value="3">Meio</option>
        <option value="4">Atirador</option>
        <option value="5">Suporte</option>
      </select><br>
      Mostrar apenas jogadores com boa reputação?
      <select name="reputacao">
        <option value="0">Não</option>
        <option value="1">Sim</option>
      </select><br>
      Nivel mínimo<select name="n1">
        <option value="">Todos</option>
        <?php
        for($i =1; $i < 1001; $i++){
          echo "<option value='".$i."'>".$i."</option>";
        }
        ?>
      </select><br>
      Nivel maxímo<select name="n2">
        <option value="">Todos</option>
        <?php
        for($i =1; $i < 1001; $i++){
          echo "<option value='".$i."'>".$i."</option>";
        }
        ?>
      </select><br>
      <input type="submit" name="botao"value="Pesquisar">
    </form>
    <?php
    if (isset($_POST['botao'])) {
      $objetivo=$_POST['objetivo'];
      $estado=$_POST['estado'];
      $e1=$_POST['e1'];
      $e2=$_POST['e2'];
      $l1=$_POST['l1'];
      $l2=$_POST['l2'];
      $reputacao=$_POST['reputacao'];
      $n1=$_POST['n1'];
      $n2=$_POST['n2'];

    if ($objetivo ==! "") {
      $sql1= "objetivo = '".$objetivo."'";
    }
    else {
      $sql1="";
    }
    if ($estado ==! "") {
      $sql2= "estado = '".$estado."'";
    }
    else {
      $sql2="";
    }
    if ($e1 ==! "") {
      $sql3= "id_elolol > '".$e1."'";
    }
    else {
      $sql3="";
    }
    if ($e2 ==! "") {
      $sql4= "id_elolol < '".$e2."'";
    }
    else {
      $sql4="";
    }
    if ($l1 ==! "" && $l2 ==! "") {
      $sql5= "id_lane1lol = ".$l1." or id_lane2lol = ".$l1." or id_lane1lol = ".$l2." or id_lane2lol = ".$l2;
    }
    elseif ($l1 ==! "" && $l2 == "") {
      $sql5= "id_lane1lol = ".$l1." or id_lane2lol = ".$l1;
    }
    elseif ($l1 == "" && $l2 ==! "") {
      $sql5= "id_lane1lol = ".$l2." or id_lane2lol = ".$l2;
    }
    else {
      $sql5="";
    }
    if ($reputacao ==! "") {
      $sql6= "reputacao > 0";
    }
    else {
      $sql6="";
    }
    if ($n1 ==! "") {
      $sql7= "idnivel > '".$n1."'";
    }
    else {
      $sql7="";
    }
    if ($n2 ==! "") {
      $sql8= "idnivel < '".$n2."'";
    }
    else {
      $sql8="";
    }
    echo $sql1."<br>".$sql2."<br>".$sql3."<br>".$sql4."<br>".$sql5."<br>".$sql6."<br>".$sql7."<br>".$sql8;
    }
    ?>

  </body>
</html>
