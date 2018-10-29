<?php
include 'config.php';
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title></title>
</head>
<body>
	<form method="POST">
		<input type="text" name="descricao" placeholder="Digite a descrição da equipe"><br>
		Objetivo:<select name="objetivo">
		  <option value="equipe profissional">Equipe profissional</option>
		  <option value="casual">Casual</option>
		  <option value="ranqueada">Ranqueada</option>
		</select><br>
		Estado:<select name="estado">
			<option value="Todos">Todos</option>
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
		<input type="SUBMIT" name="ENVIAR" value="ENVIAR">
	</form>
	<?php
		include 'connect.php';
		$descricao=$_POST['descricao'];
		$objetivo=$_POST['objetivo'];
		$estado=$_POST['estado'];
		$eminimo=$_POST['eminimo'];
		$emaximo=$_POST['emaximo'];
		if ($eminimo>$emaximo) {
			echo "Elo Mínimo maior do que Elo máximo, por favor inverta";
		}else{
			$sql = "INSERT INTO tb_equipelol VALUES (null,'$descricao', '$objetivo', '$estado', '$eminimo', '$emaximo', null, null, null, null, null)";
			if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
		}
	?>
</body>
</html>
