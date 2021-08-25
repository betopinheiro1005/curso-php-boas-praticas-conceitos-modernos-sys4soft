<?php

	echo '<h1>Include vs Require</h1>';

	$metodo = 'include';

	echo "<p>Método usado: <strong>$metodo</strong>.</p>";

	include 'script1.php';

	// conteúdo restante do index.php
	echo '<p>Este é o conteúdo restante de index.php.</p>';

  echo '================================================';

	$metodo = 'require';

	echo "<p>Método usado: <strong>$metodo</strong>.</p>";

	require 'script1.php';

	// conteúdo restante do index.php
	echo '<p>Este é o conteúdo restante de index.php.</p>';



?>
