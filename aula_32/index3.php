<?php

require 'config.php';
require 'gestor.php';

$gestor = new gestor();

$query = "select * from clientes where id_cliente > :id";
$parametros = [
  ":id" => 1
];

$dados = $gestor->EXE_QUERY($query, $parametros);

print_r($dados);

?>