<?php

// =================================
// Classe para gerir datas e horas
// =================================

class DataHora {

  public $data;

  // --------------------------------------------
  // construtor da classe
  public function __construct($formato = null){

    // timezone
    date_default_timezone_set('America/Sao_Paulo');

    if($formato === null){
      $this->data = new DateTime();
    } else {
      $this->data = new DateTime($formato);
    }
  }

// --------------------------------------------
  public function getData($formato = null){
    if($formato === null) {
      return "<p>" . $this->data->format('d/m/Y') . "</p>";
    } else {
      return "<p>" . $this->data->format($formato) . "</p>";
    }
  }

  public function getDataHora(){
      return "<p>" . $this->data->format('d/m/Y H:i:s') . "</p>";
  }


// --------------------------------------------
// Adicionar elementos a data
// --------------------------------------------

public function addDias($n){
    $this->data->add(new DateInterval('P'.$n.'D'));
  }

// --------------------------------------------
  public function addMeses($n){
    $this->data->add(new DateInterval('P'.$n.'M'));
  }

// --------------------------------------------
  public function addAnos($n){
    $this->data->add(new DateInterval('P'.$n.'Y'));
  }

// --------------------------------------------
// Adicionar elementos a hora
// --------------------------------------------

public function addHoras($n){
    $this->data->add(new DateInterval('PT'.$n.'H'));
  }

// --------------------------------------------
  public function addMinutos($n){
    $this->data->add(new DateInterval('PT'.$n.'I'));
  }

// --------------------------------------------
  public function addSegundos($n){
    $this->data->add(new DateInterval('PT'.$n.'S'));
  }

}

?>