<?php

  class Humano {

    function __construct(){
      echo 'Um humano nasceu <br />';
    }

    public function Falar($texto){
      echo 'O humano disse: ' . $texto . "<br />";
    }

    function __destruct(){
      echo 'O humano morreu <br />';
    }

  }

  $homem1 = new Humano();
  $homem1->Falar('estou vivo!');

?>