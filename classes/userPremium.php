<?php
require __DIR__ . "/user.php";

class utentePremium extends user  {
  private $sconto;
  private $spedizione;

  function __construct($_premium){
    parent::__construct($_premium);
    if(array_key_exists("sconto", $_premium)){
      $this->setSconto($_premium['sconto']);
    }

    if(array_key_exists("spedizione", $_premium)){
      $this->setSpedizione($_premium['spedizione']);
    }
  }

  public function setSconto($nuovoValore){
    $this->sconto = $nuovoValore;
  }
   
  public function setSpedizione($nuovoValore){
    $this->spedizione = $nuovoValore;
  }
 
  public function getSconto(){
    return $this -> sconto;
  }
  public function getSpedizione(){
    return $this -> spedizione;
  }
 

 

  
 

}
