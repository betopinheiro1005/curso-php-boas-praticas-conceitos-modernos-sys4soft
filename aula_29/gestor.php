<?php

// classe para a gestão da BD
class gestor {

  // ===============================================
  public function EXE_QUERY($query, $parametros = null){

    // resultados
    $resultados = null;

    // abre a conexão à BD
    $conn = new PDO('mysql:host='.$GLOBALS['db_host'].
    ';bdname='.$GLOBALS['db_name'].
    ';charset='.$GLOBALS['db_charset'],
      $GLOBALS['db_username'],
      $GLOBALS['db_password']
    );

    echo $conn->getAttribute(PDO::ATTR_CONNECTION_STATUS);

    return $resultados;
  }

  // ===============================================
  public function EXE_NON_QUERY(){

  }

}

?>