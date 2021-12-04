<?php
require_once "./data/usersApi.php";
require_once "./classes/userPremium.php";
require_once "./classes/informatica.php";

echo "<h2>Utenti</h2>";
foreach($arrayUsers as $utente){
   $singoloUtente2 = new utentePremium($utente);
    echo "Nome" . " = " . $singoloUtente2->getNome() .  "<br>";
    echo "Cognome" . " = " . $singoloUtente2->getCognome() . "<br>";
  if(array_key_exists('sconto', $utente)){
    echo "Sconto" . " = " . $singoloUtente2->getSconto() . "<br>";
  }
  if(array_key_exists('spedizione', $utente)){
    echo "Spedizione" . " = " . $singoloUtente2->getSpedizione() . "<br>";
  }

 
} 

echo "<h2>Prodotti</h2>";
foreach($arrayProdotti as $product){
  $singoloProdotto = new informatica($product);
  echo "Nome Prodotto" . " = " . $singoloProdotto->getProdotto() . "<br>";
  echo "Prezzo" . " = " . $singoloProdotto->getPrezzo() . "<br>";
  if(array_key_exists('memoria', $product)){
    echo "Memoria" . " = " . $singoloProdotto->getMemoria() . "<br>";
  }
  if(array_key_exists('ram', $product)){
    echo "Ram" . " = " . $singoloProdotto->getRam() . "<br>";
  }
}
$singoloUtente2 -> pushCart($arrayProdotti[0]);
var_dump($singoloUtente2);
