<?php
class Product {
  public $nome;
  public $prezzo;
  public $made;

  function __construct($_nome, $_prezzo, $_made) {
    $this->nome = $_nome;
    $this->prezzo = $_prezzo;
    $this->made = $_made;
  }
  public function printProduct() {
    return "$this->nome $this->prezzo made in: $this->made";
  }
}