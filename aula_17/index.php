<?php

compara(15, 15);

compara(15, '15');

compara(5, '15');

function compara($a, $b){

  if($a == $b){
    if ($a === $b){
      echo "<p>Possuem mesmo valor e tipo</p>";
    } else {
      echo "<p>Possuem mesmo valor, porém tipos diferentes</p>";
      echo '<p>tipo $a = ' . gettype($a) . '</p>';
      echo '<p>tipo $b = ' . gettype($b) . '</p>';
    }
  } else {
    echo '<p>São diferentes!</p>';
  }

  echo "===========================================";

}

$c = "";
$d = null;

if(empty($c)){
  echo '<p>A variável $c está vazia</p>';
}

if(is_null($d)){
  echo '<p>A variável $d é nula</p>';
}

echo "===========================================";

if(isset($c)){
  echo '<p>A variável $c contém um valor válido</p>';
} else {
  echo '<p>A variável $c contém um valor inválido</p>';
}

if(isset($d)){
  echo '<p>A variável $d contém um valor válido</p>';
} else {
  echo '<p>A variável $d não existe ou não contém um valor válido</p>';
}

?>
