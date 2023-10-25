<?php
function connectToDbAndGetPdo(): PDO
{
    $dbname = 'PowerOfMemory';
    $host = 'localhost';
    $dsn = "mysql:dbname=$dbname;host=$host;charset=utf8";
    $user = 'root';
    $pass = '';
    $driver_options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
    ];
    try {
        $pdo = new PDO($dsn, $user, $pass, $driver_options);
        return $pdo;
    } catch (PDOException $e) {
        echo 'La connexion à la base de données a échouée.';
    }
}
$pdo = connectToDbAndGetPdo();

function getMeilleurScore($pdo): int
{
    $pdoScores = $pdo->prepare('SELECT score FROM Scores ORDER BY score ASC LIMIT 1');
    $pdoScores->execute();
    $meilleurScore = $pdoScores->fetch();
    return $meilleurScore->score;
}

function getNbJoueursInscrits($pdo): int
{
    $pdoInscrits = $pdo->prepare('SELECT COUNT(*) AS nombre FROM Utilisateur');
    $pdoInscrits->execute();
    $nbJoueursInscrits = $pdoInscrits->fetch();
    return $nbJoueursInscrits->nombre;
}

function getNbPartiesJouees($pdo): int
{
    $pdoParties = $pdo->prepare('SELECT COUNT(*) AS nombre FROM Scores');
    $pdoParties->execute();
    $nbPartiesJouees = $pdoParties->fetch();
    return $nbPartiesJouees->nombre;
}

function getScoreTable($pdo, $recherche_pseudo): array
{
    $pdoTablo = $pdo->prepare('SELECT Jeu.nomJeu, pseudo, difficulte, score , dateHeureScore
        FROM Scores
        INNER JOIN Jeu ON Scores.idJeu=Jeu.id
        INNER JOIN Utilisateur ON Scores.idJoueur=Utilisateur.id
        WHERE pseudo LIKE "%":pseudo"%"
        ORDER BY Jeu.nomJeu ASC,
        CASE
            WHEN difficulte="easy" THEN 1
            WHEN difficulte="medium" THEN 2
            WHEN difficulte="hard" THEN 3 END,
        score ASC;');

    $pdoTablo->execute([':pseudo' => $recherche_pseudo]);
    $scoreTablo = $pdoTablo->fetchAll();
    return $scoreTablo;
}

function estPseudoExistant($pdo, $pseudo): bool
{
    $pdoPseudoExistant = $pdo->prepare('SELECT pseudo FROM Utilisateur WHERE pseudo = :pseudo;');
    $pdoPseudoExistant->execute([':pseudo' => $_POST['pseudo']]);
    $pseudoExistant = $pdoPseudoExistant->fetch();
    return $pseudoExistant != NULL;
}

function estEmailExistant($pdo, $email): bool
{
    $pdoEmailExistant = $pdo->prepare('SELECT email FROM Utilisateur WHERE email = :email;');
    $pdoEmailExistant->execute([':email' => $_POST['email']]);
    $emailExistant = $pdoEmailExistant->fetch();
    return $emailExistant != NULL;
}

function InsertionUtilisateur($pdo, $email, $mdp, $pseudo): void
{
    $pdoInsertionUtilisateur = $pdo->prepare('INSERT INTO Utilisateur (email, mdp, pseudo) VALUES(:email, :mdp, :pseudo)');
    $pdoInsertionUtilisateur->execute([':email' => $email, ':mdp' => $mdp, ':pseudo' => $pseudo]);
}
