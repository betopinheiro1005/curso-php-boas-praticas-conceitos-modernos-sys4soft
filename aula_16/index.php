<?php

abstract class Humano {
  public $nome;
  public $idade;

  function __construct($nome, $idade){
    $this->nome = $nome;
    $this->idade = $idade;
  }

  public function Falar($mensagem){
    echo "<p>$mensagem</p>";
  }

  public function Apresentar(){
    echo "<p>Meu nome é $this->nome, tenho $this->idade anos de idade!</p>";
  }

}

class Homem extends Humano {
  public function OQueEstaFazendo(){
    echo "<p>Estou fazendo a barba!</p>";
  }
}

class Mulher extends Humano {
  public function OQueEstaFazendo(){
    echo "<p>Estou me maquiando!</p>";
  }
}

$homem = new Homem('João', 25);
$homem->Falar('Bom dia!');
$homem->Apresentar();
$homem->OQueEstaFazendo();

echo "=====================================";

$mulher = new Mulher('Maria', 32);
$mulher->Falar('Boa noite!');
$mulher->Apresentar();
$mulher->OQueEstaFazendo();

?>