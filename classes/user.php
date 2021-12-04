<?php
class user {
  private $nome;
  private $cognome;
  public $cart = [];
  
  function __construct($_user){
    if(array_key_exists("nome", $_user)){
      $this->setNome($_user['nome']);
    }

    if(array_key_exists("cognome", $_user)){
      $this->setCognome($_user['cognome']);
    }
  }

  public function setNome($nuovoValore){
    $this->nome = $nuovoValore;
  }

  public function setCognome($nuovoValore){
    $this->cognome = $nuovoValore;
  }

  public function getNome(){
    return $this -> nome;
  }

  public function getCognome(){
    return $this -> cognome;
  }

  public function setCart($nuovoValore){
    $this -> cart = $nuovoValore;
  }

  public function getCart(){
    return $this -> cart;
  }
  public function pushCart($nuovoValore){
    $this -> cart[] = $nuovoValore;
  }
 
 
}


?>