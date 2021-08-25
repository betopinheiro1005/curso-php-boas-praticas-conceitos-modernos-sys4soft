<?php

$usuario = 'admin';
$senha = 'abc';
$nome_completo = 'Administrador';

require 'config.php';
require 'gestor.php';

// parâmetros do usuário
$parametros = [
  ":usuario" => $usuario,
  ":senha" => md5($senha),
  ":nome_completo" => $nome_completo
];

$query = "insert into usuarios (usuario, senha, nome_completo) values (:usuario, :senha, :nome_completo)";

// inserir usuário na BD
$gest = new gestor();
$gest->EXE_NON_QUERY($query, $parametros);

echo "<p>Usuário cadastrado com sucesso!</p>";


?>