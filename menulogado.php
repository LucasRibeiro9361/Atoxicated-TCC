
<div id="dropdown1" class="dropdown-content userstats container-fluid">
    <div class="row">
      <div class="col-md-12">
            <div class="row">
                <div class="col-md-4" id="containericonmenu">
                  <center>	<img src="img/iconlogin.png" id="iconimg2"></center>
                </div>
                <div class="col-md-8" id="containertextuser">
                  <?php
                  if (isset($_SESSION["nick"])){
                  echo $_SESSION["nick"];
              }
                  else{
                    echo "erro tente novamente mais tarde";
                  }
                  ?>
                  <br>
                  <?php
                  if (isset($_SESSION["email"])){
                  echo $_SESSION["email"];
              }
                  else{
                    echo "erro tente novamente mais tarde";
                  }
                  ?>
                </div>
          </div>
      </div>
  </div>
</div>
    <nav>
      <div class="nav-wrapper menu-pika">
        <a href="#!" id="logo-menu" >aToxicated</a>
        <ul class="right hide-on-med-and-down">
          <li ><a class="menu-text" href="cadastroplayer.php">Cadastro</a></li>
          <li><a class="menu-text" href="login.php">Login</a></li>
          <!-- Dropdown acionador -->
          <li>
            <a  id="menu-login" class="dropdown-trigger menu-text" href="#!" data-target="dropdown1">
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
