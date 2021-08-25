<?php

$host = "localhost";
$dbname = "loja";
$dbusername = "root";
$dbpassword = "";

// $gestor = new PDO(ligacao, username, password);
$pdo = new PDO("mysql:host=$host; dbname=$dbname", $dbusername, $dbpassword);

$estado = $pdo->getAttribute(PDO::ATTR_CONNECTION_STATUS);
echo $estado;

?>