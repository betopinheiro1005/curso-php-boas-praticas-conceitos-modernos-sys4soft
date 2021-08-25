<?php

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
  echo '<p>Login inválido!</p>';
} else {
  echo '<p>Login válido!</p>';

  // entrar na plataforma
}


?>