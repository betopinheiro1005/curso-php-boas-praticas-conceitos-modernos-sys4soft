<?php

  // logout
  ini_set('session.cookie.httponly', true);

  session_start();

  if(isset($_SESSION['last_IP']) === false){
    $_SESSION['last_IP'] = $_SERVER['REMOTE_ADDR'];
  }

  if($_SESSION['last_IP'] !== $_SERVER['REMOTE_ADDR']){
    session_destroy();
  }

  echo '<p>Até a próxima, ' . $_SESSION['nome'] . '!</p>';

  session_unset();
  session_destroy();

  echo '<p><a href="index.php">Voltar</a></p>';

?>