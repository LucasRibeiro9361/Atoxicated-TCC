<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta charset="utf-8"
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    session_start();
    include 'connect.php';
    $cd=$_SESSION["cdperfil"];
    echo "<p>".$cd."<p>";
    $sql = "SELECT * FROM tb_perfillol WHERE cd_perfillol='$cd'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo $row["cd_perfillol"]."<br>".
          $row["nick"]."<br>".
          $row["objetivo"]."<br>".
          $row["estado"]."<br>".
          $row["campeao1"]."<br>".
          $row["campeao2"]."<br>".
          $row["campeao3"]."<br>".
          $row["campeao4"]."<br>".
          $row["campeao5"]."<br>".
          $row["id_elolol"]."<br>".
          $row["id_lane1lol"]."<br>".
          $row["id_lane2lol"]."<br>".
          $row["id_usuario"]."<br>".
          $row["id_equipelol"]."<br>";
          $cdperfil=$row["cd_perfillol"];
        }
    } else {
        echo "0 results";
    }
    ?>
  </body>
</html>
