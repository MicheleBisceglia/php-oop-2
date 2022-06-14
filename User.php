<?php
// Classe Utente
class User {
  public $name;
  public $email;
  private $scadenza;

  function __construct($_name, $_email, $_scadenza) {
    $this->name = $_name;
    $this->email = $_email;
    $this->scadenza = $_scadenza;
  }
}