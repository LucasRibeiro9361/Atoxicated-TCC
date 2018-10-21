<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post">
      <?php
      session_start();
      include "connect.php";
      $sql = "SELECT * FROM tb_perfillol";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          echo "<form method='POST'>"."cd: ". $row["cd_perfillol"];
          echo "<input type='submit' name='botao' value='ir para perfil do ".$row['nick']."'></form>"."<br>";
          if (isset($_POST['botao'])) {
            if ($_POST['botao']="ir para perfil do ".$row['nick']) {
              $_SESSION["cdperfil"]=$row['cd_perfillol'];
              header('Location:perfilpublico.php');
            }
          }
        }
        } else {
          echo "0 results";
        }
      ?>
    </form>
  </body>
</html>
