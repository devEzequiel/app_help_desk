<?php
  require_once 'scripts/autenticar.php'; 
  require_once 'database/connect.php'; 

  $query = "SELECT * FROM `cham`";
  $exe = mysqli_query ($conn, $query);
  $value = mysqli_fetch_all($exe, MYSQLI_ASSOC);
  $b= count($value);
  //print_r($_SESSION);

?>

<html>
  <head>
    <meta charset="utf-8">
    <title>Chamado Help Desk</title>
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <link rel="stylesheet" href="css/style4.css">
  </head>

  <body class="rd">

    <nav id="navbar">
      <a id="navbar-menu" href="home.php">
        <img src="_img/logo.png" width="30" height="30" id="img" alt="">
        Help Desk
      </a>
      <div class="container3">
          <div id="col-left2">
            <form  method="post" action="scripts/logout.php">
              <button id="btn" type="submit" name="logout">Sair</button>
            </form>
          </div>
        </div>
    </nav>
    <br><br><br><br><br>
    <div class="container">
      <div id="container_con"><p id="cons">CONSULTA DE CHAMADO</p>
    </div>
    <div class="container2"> 


      <?php
      //Loop para consultar todos os chamados
        $a = 0;
        for ($a = 0 ; $a < $b; $a++){
          //print_r($value);
          if ($_SESSION['perfil'] == '2') {
            if ($_SESSION['id'] != $value[$a]["id_u"]) {
              continue;
            }
          }

      ?> 
 
        <div id="cat_1">
          <h3><?=$value[$a]["nome"]?></h3><br>
          <p><?=$value[$a]["valor"]?></p><br>
          <p><?=$value[$a]["comentarios"]?></p>
        <div id="container4">

            <!--<a id="editar" style="color:#00bfff;"href="database/editar.php">[editar]</a>-->
            <a id="deletar" style="color:#00bfff;" href="database/delete.php?link=<?=$value[$a]["id"]?>">[deletar]</a>
          </div>
        </div>
          
        <br>
         

      <?php
        //$del = $value[$a]["comentarios"];
        }

      ?>
        

        
        
      <br>
      <br>
      <div id="ajuste">
        <a class="maio" href="home.php" style="color:#000000">VOLTAR</a>
      </div>
    </div>

  </body>
</html>