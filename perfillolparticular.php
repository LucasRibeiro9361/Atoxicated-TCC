
<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta charset="utf-8"
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    include 'demo.php';
    include 'selectdedadosperfilparticular.php';
        echo "Nick: ". $nick. "<br>";
        echo "Estado: ". $estado. "<br>";
        echo "Objetivo: ". $objetivo."<br>";
    $sql = "SELECT * FROM tb_campeoes WHERE cd_campeoes='$camp1' or cd_campeoes='$camp2' or cd_campeoes='$camp3' or cd_campeoes='$camp4' or cd_campeoes='$camp5'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo $row['campeoes']." "."<img src='".$row['img']."'>";
        }
    } else {
        echo "0 results";
    }
    $sql = "SELECT * FROM tb_elolol WHERE cd_elolol='$elo'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<br>"."Elo: ".$row['elo'];
        }
    } else {
        echo "0 results";
    }
    echo "<br>"."Lanes: "."<br>";
    $sql = "SELECT * FROM tb_lanelol WHERE cd_lanelol='$lane1' or cd_lanelol='$lane2'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo $row['lane']."<br>";
        }
    } else {
        echo "0 results";
    }
    $sql = "SELECT * FROM tb_equipelol WHERE cd_equipelol='$equipe'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<br>"."equipe: ".$row['nome']."<br>";
        }
    } else {
        echo "nao possui equipes"."<br>";
    }
    include 'conviteperfil.php';
    ?>
  </body>
</html>
