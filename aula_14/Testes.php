<?php

  class Testes {

    public $texto = "Texto";

    public function Criar() : void{
      echo 'Método da classe' . "<br />";
    }

    public static function Falar($mensagem){
      echo 'Eu falei ' . $mensagem . "<br />";
    }

  }

  $a = new Testes();
  $a->Criar();
  echo $a->texto . "<br />";

  $a->texto = "Novo texto";
  echo $a->texto . "<br />";

  echo Testes::Falar('contigo');

?>