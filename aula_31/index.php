<?php

require 'config.php';
require 'gestor.php';

// Inserção do primeiro cliente

$gestor = new gestor();

$query = "insert into clientes (nome, atualizacao) values ('João', now())";

$gestor->EXE_NON_QUERY($query);

echo '<p>Cliente inserido com sucesso!</p>';

// Inserção do segundo cliente

$parametros = [
  ":nome" => 'Luis'
];

$query = "insert into clientes (nome, atualizacao) values (:nome, now())";

$gestor = new gestor();
$gestor->EXE_NON_QUERY($query, $parametros);

echo '<p>Cliente inserido com sucesso!</p>';

?>