<?php
class product {
  private $prodotto;
  private $prezzo;

  function __construct($_product){
    if(array_key_exists("prodotto", $_product)){
      $this->setProdotto($_product['prodotto']);
    }

    if(array_key_exists("prezzo", $_product)){
      $this->setPrezzo($_product['prezzo']);
    }
  }

  public function setProdotto($nuovoValore){
    $this->prodotto = $nuovoValore;
  }

  public function setPrezzo($nuovoValore){
    $this->prezzo = $nuovoValore;
  }

  public function getProdotto(){
    return $this -> prodotto;
  }

  public function getPrezzo(){
    return $this -> prezzo;
  }
 
}