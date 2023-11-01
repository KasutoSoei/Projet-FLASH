<?php
require_once 'common.php';
require_once SITE_ROOT . 'utils/database.php';

$pdoEnvoiMessage = $pdo->prepare(
    'INSERT INTO Chat (idJeu, idExpediteur, messageChat, dateHeureMessage)
    VALUES (1, :id, :envoi, CURRENT_TIMESTAMP);'
);
$pdoEnvoiMessage->execute([':id' => $_SESSION['userId'], ':envoi' => $_POST['envoi']]);
