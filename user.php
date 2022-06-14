<?php
// Classe Utente 
class User {
  public $name;
  public $email;
  private $scadenza;
  public $cart = [];

  function __construct($_name, $_email, $_scadenza) {
    $this->name = $_name;
    $this->email = $_email;
    $this->scadenza = $_scadenza;
  }

//Funzione per aggiungere prodotti al carrello
  function addToCart($_productToCart) {
    $this->cart = $_productToCart;
  }
}