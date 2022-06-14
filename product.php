<?php
class Product {
  public $nome;
  public $prezzo;
  public $id;
  public $disponibile = true;

  function __construct($_nome, $_prezzo, $_id) {
      $this->nome = $_nome;
      $this->prezzo = $_prezzo;
      $this->id = $_id;
  }
}
