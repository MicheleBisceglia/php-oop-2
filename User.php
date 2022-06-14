<?php

class User {
  public $name;
  public $email;
  public $scadenza;

  function __construct($_name, $_email, $_scadenza) {
    $this->name = $_name;
    $this->email = $_email;
    $this->scadenza =$_scadenza;
  }
}