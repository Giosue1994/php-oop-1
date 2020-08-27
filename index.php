<?php

  require_once(__DIR__ . '/Users.php');
  require_once(__DIR__ . '/Administrator.php');

  $users = [
    [
      'nome' => 'Camillo',
      'cognome' => 'Cacioppo',
      'email' => 'camillocacioppo@email.com',
      'eta' => 54,
      'commento' => 'lucertola',
    ],
    [
      'nome' => 'Antonio',
      'cognome' => 'Facaldo',
      'email' => 'antoniofacaldo@email.com',
      'eta' => 32,
      'commento' => 'stronzo',
    ],
    [
      'nome' => 'Angelo',
      'cognome' => 'Stagno',
      'email' => 'angelostagno@email.com',
      'eta' => 46,
      'commento' => 'ciao',
    ],
  ];

  $administrators = [
    [
      'nome' => 'Giosuè',
      'cognome' => 'Lentini',
      'email' => 'giolen@email.com',
      'eta' => 26,
    ]
  ];

  foreach ($users as $user) {

    $utente = new User($user['nome'], $user['cognome']);
    $utente->email = $user['email'];
    $utente->eta = $user['eta'];
    $commentare = $utente->censoredWord($user['commento']);


    echo 'Utente: ' . $utente->getFullName() . ';' . '<br>';
    echo 'Email: ' . $utente->email . ';' . '<br>';
    echo 'Età: ' . $utente->eta . ';' . '<br>';
    echo 'Commento: ' . $utente->commentare . ';' . '<br><br>';
  }

  foreach ($administrators as $user) {
    $amministratore = new Administrator($user['nome'], $user['cognome']);

    echo 'Amministratore: ' . $amministratore->getFullName() . ';' . '<br>';
  }
?>
