<?php
  require_once 'scripts/autenticar.php'; 
?>



<html>
  <head>
    <meta charset="utf-8">
    <title>Chamado Help Desk</title>
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <link rel="stylesheet" href="css/style3.css">
  </head>

  <body class="rd">

    <nav id="navbar">
      <a id="navbar-menu" href="home.php">
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
    </nav>
    <br><br><br><br><br>
    <p id="test" style="font-size: 25px;">Central de Atendimento</p><br>
    <div id="sem-linha">
      <form class="form" method="POST" action="database/registra.php" STYLE="background-color:white;">
        <p id="espaco">INFORMAÇÔES</p>
        <div>
          <label><p>NOME:*</p></label>
          <input id="name" type="text" name="nome" placeholder="Seu nome" required>
        </div>
        <div id="valor">
          <label for="valor"CD:><p>TIPO DE RECLAMAÇÃO:*</p></label>
          <select id="valor" style="width:95%;" name="valor">
            <option value="Notebook">Notebook</option>
            <option value="Impressora">Impressora</option>
            <option value="PC">PC</option>
            <option value="Periféricos">Periféricos</option>
          </select>
        </div>
        <div id="descricao">
          <label for="comen"><p>DESCRIÇÃO:*</p></label>
          <textarea id="comen" name="comentarios" rows="10" cols="40" maxlength="500" style="resize:none;" placeholder="Digite uma descrição sobre o produto" required></textarea>
        </div>
        <div  class="container">
            <button id="btn-left" type="submit">Enviar</button>
            <a id="btn-right" href="home.php" style="color:#000000">Voltar</a>
        </div>
      </form>
    </div>
  </body>  
</html>