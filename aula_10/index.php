<?php
  // inclui o cabeçalho
  include('_header.php');

  // analisar que conteúdo apresentar
  $acao = 'inicio';

  // verifica se 'a' está definido
  if(isset($_GET['a'])){
    $acao = $_GET['a'];
  }

  include('caminhos.php');

  // inclui o rodapé
  include('_footer.php');
?>