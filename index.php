<?php

  require_once(__DIR__ . '/users.php');

  $users = [
    [
      'nome' => 'Camillo',
      'cognome' => 'Cacioppo',
      'email' => 'camillocacioppo@email.com',
      'eta' => 54,
    ],
    [
      'nome' => 'Antonio',
      'cognome' => 'Facaldo',
      'email' => 'antoniofacaldo@email.com',
      'eta' => 32,
    ],
    [
      'nome' => 'Angelo',
      'cognome' => 'Stagno',
      'email' => 'angelostagno@email.com',
      'eta' => 46,
    ],
  ];

  foreach ($users as $user) {

    $utente = new User($user['nome'], $user['cognome']);
    $utente->email = $user['email'];
    $utente->eta = $user['eta'];

    echo 'Utente: ' . $utente->getFullName() . ';' . '<br>';
    echo 'Email: ' . $utente->email . ';' . '<br>';
    echo 'Età: ' . $utente->eta . ';' . '<br><br>';
  }
?>
