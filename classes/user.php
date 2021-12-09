<?php
require_once __DIR__ . "/../traits/Formatters.php";
class user {
  private $nome;
  private $cognome;
  public $cart = [];
  
  use Formatters;

  function __construct($_user){
    if(array_key_exists("nome", $_user)){
      try{
      $this->setNome($_user['nome']);
      }catch(Exception $e){
       echo('Errore:' .  " " .  $e -> getMessage() . "<br>");
      }
    }
 
    if(array_key_exists("cognome", $_user)){
      $this->setCognome($_user['cognome']);
    }
  }

  public function setNome($nuovoValore){
  
    if(strlen($nuovoValore) < 3){
      throw new Exception('Nome troppo corto');
    }else{
      $this->nome = $this -> upperCase($nuovoValore);
    }
  
  }

  public function setCognome($nuovoValore){
    $this->cognome = $this -> upperCase($nuovoValore);
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