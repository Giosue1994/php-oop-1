<?php

  class User {
    public $nome;
    public $cognome;
    public $email;
    public $eta;
    public $commentare;

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

    public function censoredWord($word) {
      $this->commentare = $word;

      if ($word == 'stronzo') {
        $this->commentare = '***';
      }
    }
  }

?>
