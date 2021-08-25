<?php

// create function with an exception
function checkNum($number) {
	if($number > 1) {
		throw new Exception("Valor deve ser menor ou igual a 1");
	}
	return true;
}

// trigger exception
try{
  $result = checkNum(2);
  echo $result;
} catch(Exception $e) {
  echo $e;
}

?>
