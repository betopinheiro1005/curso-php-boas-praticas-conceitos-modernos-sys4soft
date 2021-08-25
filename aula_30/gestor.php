<?php

// classe para a gestão da BD
class gestor {

  // ===============================================
  public function EXE_QUERY($query, $parametros = null){

    // resultados
    $resultados = null;

    // SELECT
    // abre a conexão à BD
    $conn = new PDO('mysql:host='.$GLOBALS['db_host'].
    ';bdname='.$GLOBALS['db_name'].
    ';charset='.$GLOBALS['db_charset'],
      $GLOBALS['db_username'],
      $GLOBALS['db_password'],
      array(PDO::ATTR_PERSISTENT=>TRUE)
    );

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // executa a query
    if($parametros != null){
      $gest = $conn->prepare($query);
      $gest->execute($parametros);
      $resultados = $gest->fetchAll(PDO::FETCH_ASSOC); // retorna os dados através de um array associativo
    } else {
      $gest = $conn->prepare($query);
      $gest->execute();
      $resultados = $gest->fetchAll(PDO::FETCH_ASSOC); // retorna os dados através de um array associativo
    }

    // fechar a conexão
    $conn = null;

    return $resultados;
  }

  // ===============================================
  public function EXE_NON_QUERY($query, $parametros = null){
    // INSERT, UPDATE, DELETE
    // abre a conexão à BD
    $conn = new PDO('mysql:host='.$GLOBALS['db_host'].
    ';bdname='.$GLOBALS['db_name'].
    ';charset='.$GLOBALS['db_charset'],
      $GLOBALS['db_username'],
      $GLOBALS['db_password'],
      array(PDO::ATTR_PERSISTENT=>TRUE)
    );

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // executa a query
    $conn->beginTransaction();

    try{
      if($parametros != null){
        $gest = $conn->prepare($query);
        $gest->execute($parametros);
      } else {
        $gest = $conn->prepare($query);
        $gest->execute();
      }

      $conn->commit();

    } catch(PDOException $e){
      echo '<p>' . $e . '</p>';
      $conn->rollBack();
    }

    $conn = null;

  }

}

?>