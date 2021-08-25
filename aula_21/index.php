<?php

require 'DataHora.php';

$d1 = new DataHora();
$d2 = new DataHora();
$d3 = new DataHora();

echo "<p>Data de Hoje</p>";
echo $d1->getData();
echo $d1->getData('Y-m-d');
echo "============================";

// adicionar 100 dias
echo "<p>Adicionando 100 dias a data de hoje</p>";
echo $d2->getData();
$d2->addDias(100);
echo $d2->getData();

echo "=============================";

echo "<p>Adicionando 39 horas a data de hoje</p>";
echo $d3->getDataHora();
$d3->addHoras(39);
echo $d3->getDataHora();




?>