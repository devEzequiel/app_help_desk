<?php
  
  //script para autenticar o usuário
  session_start();
  if ($_SESSION ['autenticado'] == 'nao' || !isset($_SESSION['autenticado'])) {
    header("Location: index.php?autenticado=nao");
  }


?>