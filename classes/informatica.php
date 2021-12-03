<?php
require __DIR__ . "/product.php";

class informatica extends product{
  private $memoria;
  private $ram;

  function __construct($_info){
    parent::__construct($_info);
    if(array_key_exists("memoria", $_info)){
      $this->setMemoria($_info['memoria']);
    }

    if(array_key_exists("ram", $_info)){
      $this->setRam($_info['ram']);
    }
  }

  public function setMemoria($nuovoValore){
    $this->memoria = $nuovoValore;
  }
   
  public function setRam($nuovoValore){
    $this->ram = $nuovoValore;
  }
 
  public function getMemoria(){
    return $this -> memoria;
  }
  public function getRam(){
    return $this -> ram;
  }
}




?>