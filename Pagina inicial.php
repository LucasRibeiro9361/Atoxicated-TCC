<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pagina inicial</title>

    <!-- Linkagem -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
  	<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/scripts.js"></script>
  </head>

  <body id="page-top">

    <!-- Menu -->
    <!-- Dropdown Structure -->
    <?php
  if(isset($_SESSION["nick"])){
    include 'menulogado.php';
  }
  else{
    include 'menudeslogado.php';
  }
    ?>

<!-- fim do menu -->
<div id="box-menu-jogo">
  ESCOLHA UM JOGO
</div>
<!-- corpo da pagina -->
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-4">
    <div class="accordian">
      <div class="container-image-menu">
      <a href="apilol/nicknamelol.php">
        <img id="img-menu-position" class="img-menu" src="img/lol.jpg" id="img1"/>
      </a>
      </div>


</div>
</div>
<div class="col-lg-4">
<div class="accordian">
  <div class="container-image-menu">
  <a href="api1/profilecsgo.php">
    <img id="img-menu-position" class="img-menu" src="img/csgo.png" />
  </a>
</div>

</div>
</div>
</div>
</div>
<style>

.img-menu{
  transition:all 0.3s ease;
        opacity:0.8;
}
.img-menu:hover
{

  transition:all 0.3s ease;
        opacity:1 ;
        box-shadow: 20px,purple;
}

.mainNuvem{
  color:black !important;
  opacity:1.0 !important;
  font-family: arial !important;
}
body{

  background-image: url(img/fundo2.jpg);
  background-size:cover;
  background-attachment: scroll;
}


</style>


      <!-- slider -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer>
      <footer class="page-footer">
               <div class="container">
                 <div class="row">
                   <div class="col l6 s12">
                     <h5 class="black-text">aToxicated</h5>
                     <p class="black-text text-lighten-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sollicitudin orci, eget interdum sem aliquet vive
                   </div>
                   <div class="col l4 offset-l2 s12">
                     <h5 class="black-text">Contato</h5>
                     <ul>
                       <li>
                        <i class="fas fa-phone icon"></i>
                        <a class="black-text text-lighten-3 icon" href="#!">(13) 3427-1601</a>
                      </li>
                       <li>
                         <i class="fas fa-at icon"></i>
                         <a class="black-text text-lighten-3 icon" href="#!">atoxicatedcorporation@gmail.com</a>
                       </li>
                       <li>
                         <i class="fas fa-map-marked icon"></i>
                         <a class="black-text text-lighten-3 icon" href="#!">Av. José Batista Campos, 1431 - Cidade Anchieta, Itanhaém</a>
                       </li>
                     </ul>
                   </div>
                 </div>
               </div>
               <div class="footer-copyright">
                 <div class="container">
                 © 2018 Copyright by bucecheq studios
                 <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
                 </div>
               </div>
             </footer>
    </footer>



  </body>

</html>
