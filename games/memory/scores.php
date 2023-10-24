<!DOCTYPE html>
<html lang="fr">
<?php
require_once '../../utils/common.php';
require_once SITE_ROOT . 'partials/head.php';
require_once SITE_ROOT . 'partials/header.php';
require_once SITE_ROOT . 'chat.php';
require_once SITE_ROOT . 'utils/database.php';

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

if (!isset($_POST['recherche_pseudo'])){
    $_POST['recherche_pseudo'] = '';
}

$pdoTablo->execute([':pseudo' => $_POST['recherche_pseudo']]);
$scoreTablo = $pdoTablo->fetchAll();

?>

<section class="scoreshtml">

    <body>
        <div class="scores_titre">
            SCORES
        </div>
        <div class="scores">
            <form method="post" style="width: 100%;">
                <span class="scores_recherche">
                    <img src="<?= PROJECT_FOLDER ?>assets/images/recherche.png">
                    <input type="text" name="recherche_pseudo" placeholder="Recherche" class="scores_recherche_entree">
                </span>
            </form>
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
                        <td><?php echo $scoreTablo[$i]->dateHeureScore ?> </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
        <?php require_once SITE_ROOT . 'partials/footer.php'; ?>
    </body>
</section>