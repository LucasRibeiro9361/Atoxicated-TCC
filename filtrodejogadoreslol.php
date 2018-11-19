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
      <select name="objetivo">
        <option value="lazer">Lazer</option>
        <option value="ranqueada">Ranqueada</option>
        <option value="campeonato">Campeonato</option>
      </select><br>
      <select name="estado">
        <option value="">Qualquer</option>
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
      Elo Minimo<select name="eminimo">
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
  		Elo Maximo<select name="emaximo">
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
      Lane 1
      <select name="lane">
        <option value="1">topo</option>
        <option value="2">Selva</option>
        <option value="3">Meio</option>
        <option value="4">Atirador</option>
        <option value="5">Suporte</option>
      </select><br>
      mostrar jogadores com reputacoes negativas?
      <select name="reputacao">
        <option value="1">Sim</option>
        <option value="2">Não</option>
      </select><br>
      idade <select name="idade">
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30+</option>
      </select>
    </form>
    <?php
    if (isset($_POST['objetivo'])) {
      $objetivo=$_POST['objetivo'];
      $estado=$_POST['estado'];
      $eminimo=$_POST['eminimo'];
      $emaximo=$_POST['emaximo'];
      $lane=$_POST['lane'];
      $reputacao=$_POST['reputacao'];
      $idade=$_POST['idade'];
    }
    ?>
      <?php
      include "connect.php";
      $sql = "SELECT * FROM tb_perfillol";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          echo "<form method='POST' action='perfilpublico.php'>"."cd: ". $row["cd_perfillol"];
          echo "<input type='hidden' value='".$row['cd_perfillol']."' name='cd'><input type='submit' name='botao' value='ir para perfil do ".$row['nick']."'></form>"."<br>";
        }
        } else {
          echo "0 results";
        }
      ?>
  </body>
</html>
