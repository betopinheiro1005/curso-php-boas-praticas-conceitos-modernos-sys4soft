<?php

// Exibindo datas

$data_atual = date('d/m/Y H:i:s');
echo "<p>$data_atual</p>";

echo "===========================================";

echo "<h3>Exibindo datas </h3>";

$data_ontem = new DateTime('yesterday');
echo "<p>Ontem: " . $data_ontem->format('d/m/Y') . "</p>";

$data_hoje = new DateTime('today');
echo "<p>Hoje: " . $data_hoje->format('d/m/Y') . "</p>";

$data_amanha = new DateTime('tomorrow');
echo "<p>Amanhã: " . $data_amanha->format('d/m/Y') . "</p>";

echo "===========================================";

// Comparando datas

echo "<h3>Comparando datas</h3>";

if($data_ontem < $data_hoje){
  echo '<p>$data_ontem é menor que $data_hoje</p>';
}

if($data_amanha > $data_hoje) {
  echo '<p>$data_amanha é maior que $data_hoje</p>';
}

echo "===========================================";

// Adicionando dias a uma data

echo "<h3>Adicionando 10 dias a data de hoje</h3>";

$data_plus_10_dias = $data_hoje->add(new DateInterval('P10D'));

// Hoje + 10 dias

echo "<p>Data daqui a 10 dias: " . $data_plus_10_dias->format('d/m/Y') . "</p>";

echo "===========================================";

?>