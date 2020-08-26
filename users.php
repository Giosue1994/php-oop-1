<?php

  class User {
    public $nome;
    public $cognome;
    public $email;
    public $eta;

    public function __construct($_nome, $_cognome)
    {
      $this->setNameSurname($_nome, $_cognome);
    }

    public function setNameSurname($name, $surname) {
      if (!empty($name) && !empty($surname)) {
        $this->nome = $name;
        $this->cognome = $surname;
      } else {
        die('i campi non possono essere vuoti');
      }
    }

    public function getFullName() {
      return $this->nome . ' ' . $this->cognome;
    }
  }
  
?>
