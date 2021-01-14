<?php

  require_once 'scripts/autenticar.php'; 
?>



<html>
  <head>
    <meta charset="utf-8">
    <title>App Help Desk</title>
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
  </head>

  <body class="rd">

    <nav id="navbar">
      <a id="navbar-menu" href="#">
        <img src="_img/logo.png" width="30" height="30" id="img" alt="">
        PAYM A TECH Desk
      </a>
      <div class="container3">
          <div id="col-left2">
            <form  method="post" action="scripts/logout.php">
              <button id="btn" type="submit" name="logout">Sair</button>
            </form>
          </div>
        </div>
    </nav><br><br><br>


    <div class="container">    
      <div class="row">

        <div class="card-home">
          <p class="txt">Menu</p>
        </div>
        <div class="container2">
          <div id="col-left">
            <table>
              <tr>
                <td>
                  <a href="chamado.php">
                    <img src="_img/formulario_abrir_chamado.png" width="70" height="70" >
                  </a>
                </td>
                <td>
                  <p>ABRIR CHAMADO</p>
                </td>
              </tr>
            </table>
          </div>
          <div id="col-right">
            <table>
              <tr>
                <td>
                  <a href="consultar_chamado.php">
                    <img src="_img/formulario_consultar_chamado.png" width="70" height="70">
                  </a>
                </td>
                <td>
                  <p>CONSULTAR CHAMADO</p>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>