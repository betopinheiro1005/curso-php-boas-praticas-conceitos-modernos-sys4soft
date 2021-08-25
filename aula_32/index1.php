<?php

require 'config.php';
require 'gestor.php';

$gestor = new gestor();

$query = "select * from clientes";

$dados = $gestor->EXE_QUERY($query);

print_r($dados);

?>