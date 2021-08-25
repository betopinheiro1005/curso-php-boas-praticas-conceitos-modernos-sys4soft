<?php

// no BD
$usuario = 'joao';
$pass = md5("123456");

// no formulário
$f_usuario = 'joao';
$f_pass = "123456";

// logica
$hash = md5($f_pass);

// analisar o login
if($f_usuario == $usuario && $hash == $pass){
  echo "<p>Sucesso!</p>";
} else {
  echo "<p>Insucesso!</p>";
}

?>