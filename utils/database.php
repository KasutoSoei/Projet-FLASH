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

function obtenirMeilleurScore($pdo): string
{
    $pdoScores = $pdo->prepare('SELECT score FROM Scores ORDER BY score ASC LIMIT 1');
    $pdoScores->execute();
    return $pdoScores->fetch()->score;
}

function obtenirNbJoueursInscrits($pdo): int
{
    $pdoInscrits = $pdo->prepare('SELECT COUNT(*) AS inscrits FROM Utilisateur');
    $pdoInscrits->execute();
    return $pdoInscrits->fetch()->inscrits;
}

function obtenirNbPartiesJouees($pdo): int
{
    $pdoParties = $pdo->prepare('SELECT COUNT(*) AS nombre FROM Scores');
    $pdoParties->execute();
    return $pdoParties->fetch()->nombre;
}

function obtenirNbPartiesJoueesUtilisateur($pdo, $id): int
{
    $pdoParties = $pdo->prepare('SELECT COUNT(*) AS nombre FROM Scores WHERE idJoueur= :id ');
    $pdoParties->execute([':id' => $id]);
    return $pdoParties->fetch()->nombre;
}

function obtenirTempsJeuUtilisateur($pdo, $id): string
{
    $pdoTempsJeuUtilisateur = $pdo->prepare("SELECT score AS temps FROM Scores WHERE idJoueur = :id");
    $pdoTempsJeuUtilisateur->execute([':id' => $id]);
    $temps = $pdoTempsJeuUtilisateur->fetchAll();
    $millisecondes = 0;
    $secondes = 0;
    $minutes = 0;
    $heures = 0;
    foreach ($temps as $score) {
        $millisecondes += (int)(substr($score->temps, -2, 2));
        $secondes += (int)(substr($score->temps, -5, 2));
        $minutes += (int)(substr($score->temps, -8, 2));
    }
    $secondes += (string)(int)($millisecondes / 100);
    $millisecondes %= 100;
    $minutes += (string)(int)($secondes / 60);
    $secondes %= 60;
    $heures += (string)(int)($minutes / 60);
    $minutes %= 60; 
    if (strlen($heures) == 1) {
        $heures = '0' . $heures;
    }
    if (strlen($minutes) == 1) {
        $minutes = '0' . $minutes;
    }
    if (strlen($secondes) == 1) {
        $secondes = '0' . $secondes;
    }
    if (strlen($millisecondes) == 1) {
        $millisecondes = "0";
    } 
    return "$heures:$minutes:$secondes:$millisecondes";
}

function obtenirMeilleurScoreUtilisateur($pdo, $id): string
{
    $pdoScoresUtilisateur = $pdo->prepare("SELECT score FROM Scores WHERE idJoueur = :id ORDER BY score ASC LIMIT 1");
    $pdoScoresUtilisateur->execute([':id' => $id]);
    $meilleurScore = $pdoScoresUtilisateur->fetch();
    if ($meilleurScore == null) {
        return "Aucun score";
    } else {
        return $meilleurScore->score;
    }
}

function obtenirScoreTable($pdo, $recherchePseudo): array
{
    $pdoTablo = $pdo->prepare(
        'SELECT Jeu.nomJeu, Utilisateur.id, pseudo, difficulte, score , dateHeureScore
        FROM Scores
        INNER JOIN Jeu ON Scores.idJeu=Jeu.id
        INNER JOIN Utilisateur ON Scores.idJoueur=Utilisateur.id
        WHERE pseudo LIKE "%":pseudo"%"
        ORDER BY Jeu.nomJeu ASC,
        CASE
            WHEN difficulte="easy" THEN 1
            WHEN difficulte="medium" THEN 2
            WHEN difficulte="hard" THEN 3 END,
        score ASC;'
    );

    $pdoTablo->execute([':pseudo' => $recherchePseudo]);
    return $pdoTablo->fetchAll();
}

function estPseudoExistant($pdo, $pseudo): bool
{
    $pdoPseudoExistant = $pdo->prepare('SELECT COUNT(*) AS pseudoExistant FROM Utilisateur WHERE pseudo = :pseudo;');
    $pdoPseudoExistant->execute([':pseudo' => $pseudo]);
    return $pdoPseudoExistant->fetch()->pseudoExistant;
}

function estEmailExistant($pdo, $email): bool
{
    $pdoEmailExistant = $pdo->prepare('SELECT COUNT(*) AS emailExistant FROM Utilisateur WHERE email = :email;');
    $pdoEmailExistant->execute([':email' => $email]);
    return $pdoEmailExistant->fetch()->emailExistant;
}

function insereUtilisateurEtRetourneId($pdo, $email, $mdp, $pseudo): int
{
    $pdoInsertionUtilisateur = $pdo->prepare('INSERT INTO Utilisateur (email, mdp, pseudo) VALUES(:email, :mdp, :pseudo)');
    $pdoInsertionUtilisateur->execute([':email' => $email, ':mdp' => $mdp, ':pseudo' => $pseudo]);
    $pdoIdUtilisateur = $pdo->prepare('SELECT id FROM Utilisateur WHERE pseudo = :pseudo');
    $pdoIdUtilisateur->execute([':pseudo' => $pseudo]);
    return $pdoIdUtilisateur->fetch()->id;
}

function compteExiste($pdo, $email, $mdp): bool
{
    $pdoCompte = $pdo->prepare('SELECT COUNT(*) AS mailMdpCorrespondent FROM Utilisateur WHERE email = :email AND mdp = :mdp;');
    $pdoCompte->execute([':email' => $email, ':mdp' => hash('sha256', $mdp)]);
    return $pdoCompte->fetch()->mailMdpCorrespondent;
}

function obtenirId($pdo, $email, $mdp): int
{
    $pdoId = $pdo->prepare('SELECT id FROM Utilisateur WHERE email = :email AND mdp = :mdp;');
    $pdoId->execute([':email' => $email, ':mdp' => hash('sha256', $mdp)]);
    return $pdoId->fetch()->id;
}

function obtenirPseudo($pdo, $id): string
{
    $pdoPseudo = $pdo->prepare('SELECT pseudo FROM Utilisateur WHERE id = :id;');
    $pdoPseudo->execute([':id' => $id]);
    return $pdoPseudo->fetch()->pseudo;
}

function estBonMdp($pdo, $mdpEntre, $idUtilisateur): bool
{
    $pdoMdpExistant = $pdo->prepare('SELECT mdp FROM Utilisateur WHERE id = :id');
    $pdoMdpExistant->execute([':id' => $idUtilisateur]);
    return $pdoMdpExistant->fetch()->mdp == hash('sha256', $mdpEntre);
}

function changeMdp($pdo, $newMdp, $idUtilisateur): void
{
    $pdoNewMdp = $pdo->prepare('UPDATE Utilisateur SET mdp = :mdp WHERE id = :id');
    $pdoNewMdp->execute([':mdp' => $newMdp, ':id' => $idUtilisateur]);
}
function changePseudo($pdo, $newPseudo, $idUtilisateur): void
{
    $pdoNewMdp = $pdo->prepare('UPDATE Utilisateur SET pseudo = :pseudo WHERE id = :id');
    $pdoNewMdp->execute([':pseudo' => $newPseudo, ':id' => $idUtilisateur]);
}

function estBonEmail($pdo, $emailEntre, $idUtilisateur): bool
{
    $pdoEmailExistant = $pdo->prepare('SELECT email FROM Utilisateur WHERE id = :id');
    $pdoEmailExistant->execute([':id' => $idUtilisateur]);
    return  $pdoEmailExistant->fetch()->email == $emailEntre;
}

function changeEmail($pdo, $newEmail, $idUtilisateur): void
{
    $pdoNewEmail = $pdo->prepare('UPDATE Utilisateur SET email = :email WHERE id = :id');
    $pdoNewEmail->execute([':email' => $newEmail, ':id' => $idUtilisateur]);
}

function supprimerCompte($pdo, $id): void
{
    $pdoSupprime = $pdo->prepare('DELETE FROM Utilisateur WHERE id = :id');
    $pdoSupprime->execute([':id' => $id]);
}

function obtenirMessagesChat($pdo, $id): array
{
    $pdoMessagesChat = $pdo->prepare(
        'SELECT Chat.id AS id, messageChat, CAST(dateHeureMessage AS time) AS heure, pseudo, Utilisateur.id AS utilisateurId, Utilisateur.id = :id AS estEnvoyeur
        FROM Chat
        INNER JOIN Utilisateur ON Chat.idExpediteur = Utilisateur.id
        WHERE dateHeureMessage > CURRENT_TIMESTAMP - INTERVAL 1 DAY
        ORDER BY dateHeureMessage ASC'
    );
    $pdoMessagesChat->execute([':id' => $id]);
    return $pdoMessagesChat->fetchAll();
}

function envoiMessage($pdo, $id, $message): void
{
    $pdoEnvoiMessage = $pdo->prepare(
        'INSERT INTO Chat (idJeu, idExpediteur, messageChat, dateHeureMessage)
        VALUES (1, :id, :envoi, CURRENT_TIMESTAMP);'
    );
    $pdoEnvoiMessage->execute([':id' => $id, ':envoi' => $message]);
}
