<!DOCTYPE html>
<html lang="fr">
<?php
require_once '../../utils/common.php';
require_once SITE_ROOT . 'partials/head.php';
require_once SITE_ROOT . 'partials/header.php';
require_once SITE_ROOT . 'chat.php';
require_once SITE_ROOT . 'utils/database.php';

$pdoTablo = $pdo->prepare('SELECT Jeu.nomJeu, pseudo, difficulte, score , dateHeure
    FROM Scores
    INNER JOIN Jeu ON Scores.idJeu=Jeu.id
    INNER JOIN Utilisateur ON Scores.idJoueur=Utilisateur.id
    ORDER BY Jeu.nomJeu ASC,
    CASE
        WHEN difficulte="easy" THEN 1
        WHEN difficulte="medium" THEN 2
        WHEN difficulte="hard" THEN 3 END,
    score ASC;');


$pdoTablo->execute([]);
$scoreTablo = $pdoTablo->fetchAll();
/*
    foreach($scoreTablo as $score){
        echo $score -> nomJeu;
        echo $score -> pseudo;
        echo $score -> difficulte;
        echo $score -> score;

    }
    */





?>
<section class="scoreshtml">

    <body>


        <div class="scores_titre">
            SCORES
        </div>
        <div class="scores">
            <table class="styled-table">

                <thead>
                    <tr>
                        <th>Nom du jeu</th>
                        <th>Pseudo du joueur</th>
                        <th>Niveau de difficulté</th>
                        <th>Score (en sec)</th>
                        <th>Date et Heure de la partie</th>
                    </tr>
                </thead>
                <?php for ($i = 0; $i < sizeof($scoreTablo); $i++) { ?>
                    <tr <?php if ($scoreTablo[$i]->pseudo == "ChouKri") : ?>class="active-row" <?php endif; ?>>
                        <td><?php echo $scoreTablo[$i]->nomJeu ?> </td>
                        <td><?php echo $scoreTablo[$i]->pseudo ?> </td>
                        <td><?php echo $scoreTablo[$i]->difficulte ?> </td>
                        <td><?php echo $scoreTablo[$i]->score ?> </td>
                        <td><?php echo $scoreTablo[$i]->dateHeure ?> </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
        <?php require_once SITE_ROOT . 'partials/footer.php'; ?>
    </body>
</section>