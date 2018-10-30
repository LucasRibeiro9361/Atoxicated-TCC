
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
    include 'conviteperfil.php';
    $sql = "SELECT * FROM tb_campeoes WHERE cd_campeoes='$camp1' or cd_campeoes='$camp2' or cd_campeoes='$camp3' or cd_campeoes='$camp4' or cd_campeoes='$camp5'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo $row['campeoes']." "."<img src='".$row['img']."'>";
        }
    } else {
        echo "0 results";
    }
    ?>
  </body>
</html>
