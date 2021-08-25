<?php

// no BD
$usuario = 'joao';
$pass = password_hash("123456", PASSWORD_DEFAULT);

// no formulário
$f_usuario = 'joao';
$f_pass = "123456";

// analisar o login
if($f_usuario == $usuario && password_verify($f_pass, $pass)){
  echo "<p>Sucesso!</p>";
} else {
  echo "<p>Insucesso!</p>";
}

?>