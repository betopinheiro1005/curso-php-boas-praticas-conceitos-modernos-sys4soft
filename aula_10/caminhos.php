<?php

  // análise da ação
  switch($acao){
    case 'inicio':
      include 'inicio.php';
      break;
    case 'servicos':
      include 'servicos.php';
      break;
    case 'contatos':
      include 'contatos.php';
      break;
    case 'links':
      include 'links.php';
      break;
    case 'mapa':
      include 'mapa.php';
      break;
  }

?>