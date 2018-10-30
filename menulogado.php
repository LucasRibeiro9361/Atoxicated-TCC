

    <nav>
      <div class="menu-pika">
        <a href="#!" id="logo-menu" >aToxicated</a>
        <ul class="right hide-on-med-and-down">
          <li ><a class="menu-text" href="cadastroplayer.php">Cadastro</a></li>
          <li><a class="menu-text" href="login.php">Login</a></li>
          <!-- Dropdown acionador -->
          <li>
            <div class"dropdown2">
            <a onclick="myFunction()" class"dropbtn menu-text2">
            <?php
            if (isset($_SESSION["nick"])){
            echo $_SESSION["nick"];
    }
            else{
              echo "deslogado";
            }
            ?>
            <i class="material-icons right"></i></a></li>
            <div id="myDropdown" class="dropdown-content1">
                <div class="row">
                  <div class="col-md-12">
                        <div class="row line-size">
                            <div class="col-md-12" id="containericonmenu">
                              <center>	<img src="img/iconlogin.png" id="iconimg2"></center>
                            </div>
                          </div>
                            <div class="row">
                            <div class="col-md-12" id="containertextuser">
                            <center>  <?php
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
                              ?></center>
                            </div>

                      </div>
                      <div class="row line-size">
                            <div class="col-md-12">
                              Seu perfil
                            </div>
                      </div>
                      <div class="row line-size">
                            <div class="col-md-12">
                              Seu perfil
                            </div>
                      </div>
                      <div class="row">
                            <div class="col-md-12 btncontainer">
                              <button class="button button5" href="logout.php">Logout</button>
                            </div>
                      </div>
                  </div>
              </div>
            </div>
          </div>
          </li>
        </ul>
      </div>
    </nav>
    <script>
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown menu if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {

        var dropdowns = document.getElementsByClassName("dropdown-content2");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
</script>
