<!DOCTYPE html>
<html lang="fr">
<?php
require_once '../../utils/common.php';
require_once SITE_ROOT . 'partials/head.php';
require_once SITE_ROOT . 'partials/header.php';
require_once SITE_ROOT . 'chat.php';
require_once SITE_ROOT . 'utils/database.php';

if (!isset($_GET['recherche_pseudo'])){
    $_GET['recherche_pseudo'] = '';
}

$score_table = getScoreTable($pdo, $_GET['recherche_pseudo']);
?>

<section class="scoreshtml">

    <body>
        <div class="scores_titre">
            SCORES
        </div>
        <div class="scores">
            <form method="get" style="width: 100%;">
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
                <?php for ($i = 0; $i < sizeof($score_table); $i++) { ?>
                    <tr <?php if ($score_table[$i]->pseudo == "ChouKri") : ?>class="active-row" <?php endif; ?>>
                        <td><?php echo $score_table[$i]->nomJeu ?> </td>
                        <td><?php echo $score_table[$i]->pseudo ?> </td>
                        <td><?php echo $score_table[$i]->difficulte ?> </td>
                        <td><?php echo $score_table[$i]->score ?> </td>
                        <td><?php echo $score_table[$i]->dateHeureScore ?> </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
        <?php require_once SITE_ROOT . 'partials/footer.php'; ?>
    </body>
</section>