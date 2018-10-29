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
  	<link rel="stylesheet" href="css/materialize/css/materialize.min.css">
  	<link rel="stylesheet" href="css/materialize/css/materialize.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="css/materialize/js/materialize.js"></script>
    <script src="css/materialize/js/materialize.min.js"></script>
  </head>

  <body id="page-top">
    <ul id="dropdown1" class="dropdown-content">
      <li><a href="#!">
      <?php
      if (isset($_SESSION["cdusuario"])){
      echo $_SESSION["cdusuario"];
    }
      else{
        echo "";
      }
      ?>
    </a></li>
      <li><a href="#!">
        <?php
        if (isset($_SESSION["nick"])){
        echo $_SESSION["nick"];
    }
        else{
          echo "";
        }
        ?>
      </a></li>
      <li><a href="#!">
        <?php
        if (isset($_SESSION["nivel"])){
        echo $_SESSION["nivel"];
    }
        else{
          echo "";
        }
        ?>
      </a></li>
      <li><a class="menu-text" href="logout.php">Logout</a></li>
    </ul>
    <nav>
      <div class="nav-wrapper menu-pika">
        <a href="#!" id="logo-menu" >aToxicated</a>
        <ul class="right hide-on-med-and-down">
          <li ><a class="menu-text" href="cadastroplayer.php">Cadastro</a></li>
          <li><a class="menu-text" href="login.html">Login</a></li>
          <!-- Dropdown acionador -->
          <li><a  id="menu-login" class="dropdown-trigger menu-text" href="#!" data-target="dropdown1">
            <?php
            if (isset($_SESSION["nick"])){
            echo $_SESSION["nick"];
    }
            else{
              echo "deslogado";
            }
            ?>
            <i class="material-icons right"></i></a></li>
        </ul>
      </div>
    </nav>
    <!--mobile -->
    <ul class="sidenav" id="mobile-demo">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul>
  </body>
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
  </html>
