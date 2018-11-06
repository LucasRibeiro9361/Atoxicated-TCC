<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    include 'connect.php';
    include 'selectdedadosperfilparticular.php';
    $sql = "SELECT * FROM tb_conviteequipeusuario WHERE id_jogadorlol='$cd' and status=0";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row_cnt = mysqli_num_rows($result);
        echo "Você tem ".$row_cnt." novos convites"."<br>".
        '<form method="POST"><select name="convites">';
        while($row = $result->fetch_assoc()) {
          $cdconvite=$row["cd_convite"];
          $jlol=$row["id_jogadorlol"];
          $eqlol=$row["id_equipelol"];
          $mensagem=$row["mensagem"];
          $status=$row["status"];
          $l=$row["id_lanelol"];
          $f=$row["id_funcaocs"];
          $sql = "SELECT * FROM tb_lanelol WHERE cd_lanelol='$l'";
            $result1 = $conn->query($sql);
            if ($result1->num_rows > 0) {
                while($row = $result1->fetch_assoc()) {
                  $nomelane=$row["lane"];
                }
            }
          $sql = "SELECT * FROM tb_equipelol WHERE cd_equipelol='$eqlol'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                  $nomeequipe=$row["nome"];
                }
          }
            echo '<option value"'.$cdconvite.'">'."a equipe ".$nomeequipe." quer que você faça parte deles, tendo como função ".$nomelane.'<br>'." mensagem: ".$mensagem.'</option>';
            }
          }else {
              echo "Sem convites";
          }
          echo "</select><input type='submit' name='botao' value'Aceitar'";
            if (isset($botao)) {
            $botao=$_POST['botao'];
            if ($botao=="Aceitar") {
              $sql = "UPDATE tb_perfillol SET id_equipelol='$eqlol' WHERE cd_perfillol='$cd'";
                if ($conn->query($sql) === TRUE) {
                    echo "Record updated successfully";
                } else {
                    echo "Error updating record: " . $conn->error;
                }
              $sql = "UPDATE tb_conviteequipeusuario SET status=1 WHERE cd_convite=$cdconvite";
                if ($conn->query($sql) === TRUE) {
                    echo "Record updated successfully";
                } else {
                    echo "Error updating record: " . $conn->error;
                }
              if ($nomelane=="Topo") {
                $sql = "UPDATE tb_equipelol SET id_topo='$cd' WHERE cd_equipelol='$eqlol'";
                if ($conn->query($sql) === TRUE) {
                    echo "Record updated successfully";
                } else {
                    echo "Error updating record: " . $conn->error;
                }

              }
              elseif ($nomelane=="Selva") {
                $sql = "UPDATE tb_equipelol SET id_selva='$cd' WHERE cd_equipelol='$eqlol'";
                if ($conn->query($sql) === TRUE) {
                    echo "Record updated successfully";
                } else {
                    echo "Error updating record: " . $conn->error;
                }
              }
              elseif ($nomelane=="Meio") {
                $sql = "UPDATE tb_equipelol SET id_meio='$cd' WHERE cd_equipelol='$eqlol'";
                if ($conn->query($sql) === TRUE) {
                    echo "Record updated successfully";
                } else {
                    echo "Error updating record: " . $conn->error;
                }
              }
              elseif ($nomelane=="Atirador") {
                $sql = "UPDATE tb_equipelol SET id_atirador='$cd' WHERE cd_equipelol='$eqlol'";
                if ($conn->query($sql) === TRUE) {
                    echo "Record updated successfully";
                } else {
                    echo "Error updating record: " . $conn->error;
                }
              }
              elseif ($nomelane=="Suporte") {
                $sql = "UPDATE tb_equipelol SET id_suporte='$cd' WHERE cd_equipelol='$eqlol'";
                if ($conn->query($sql) === TRUE) {
                    echo "Record updated successfully";
                } else {
                    echo "Error updating record: " . $conn->error;
                }
              }
            }
          }


    ?>
  </body>
</html>
