<?php

require 'config.php';
require 'gestor.php';

$gestor = new gestor();

$query = "select * from clientes where id_cliente < 2";

$dados = $gestor->EXE_QUERY($query);

print_r($dados);

?>