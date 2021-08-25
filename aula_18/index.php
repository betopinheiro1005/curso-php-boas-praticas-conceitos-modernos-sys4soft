<?php

  function teste($nome) {
    if(gettype($nome) === "string")
      return "<p>É uma string</p>";

    return "<p>Não é uma string</p>";
  }

  echo teste('Maria');
  echo teste(5);


  $a = '2';

  switch($a){
    case 1:
      echo '<p>Valor 1</p>';
      break;
    case 2:
      echo '<p>Valor 2</p>';
      break;
    case 3:
      echo '<p>Valor 3</p>';
      break;
    default:
      echo '<p>Outro valor</p>';
  }



?>