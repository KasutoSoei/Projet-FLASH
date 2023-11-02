<?php 
require_once 'common.php';
require_once SITE_ROOT . 'utils/database.php';

if (isset($_POST['score']) && isset($_POST['difficulte'])) {
    $score = $_POST['score'];
    $difficulte = $_POST['difficulte'];
    $pdoInsererScore = $pdo->prepare(
        'INSERT INTO Scores (idJoueur, idJeu, difficulte, score, dateHeureScore)
        VALUES (:id, 1, :difficulte , :score, CURRENT_TIMESTAMP);'
    );
    $pdoInsererScore->execute([':id' => $_SESSION['userId'], ':score' => $score, ':difficulte' => $difficulte]);

}