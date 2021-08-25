<?php

require 'mail.php';

$mensagem = "<p>Este é um parágrafo de HTML <strong> - MUITO BEM - </strong></p><br />Esta é uma nova linha.";

EnviarEmail("robertopinheiro7843@gmail.com", "robertopinheiro7843@gmail.com", "Mensagem de teste", $mensagem);

?>