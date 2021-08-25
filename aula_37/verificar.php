<?php

  ini_set('session.cookie.httponly', true);

  session_start();

  if(isset($_SESSION['last_IP']) === false){
    $_SESSION['last_IP'] = $_SERVER['REMOTE_ADDR'];
  }

  if($_SESSION['last_IP'] !== $_SERVER['REMOTE_ADDR']){
    session_destroy();
  }

  // verifica se os dados estão corretos
  $usuario = $_POST['txt_usuario'];
  $senha = $_POST['txt_senha'];

  require 'config.php';
  require 'gestor.php';

  $parametros = [
    ":usuario" => $usuario,
    ":senha" => md5($senha)
  ];

  $query = "select * from usuarios where usuario = :usuario and senha = :senha";

  $gest = new gestor();
  $resultados = $gest->EXE_QUERY($query, $parametros);

  if(count($resultados) == 0){
    echo '<p>Login inválido!</p><p><a href="index.php">Voltar</a></p>';
  } else {
    $_SESSION['nome'] = $resultados[0]['nome_completo'];
    echo '<p>Login válido!</p><p><a href="index.php">Voltar</a></p>';
  }

?>