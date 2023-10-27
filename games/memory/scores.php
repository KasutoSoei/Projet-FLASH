<!DOCTYPE html>
<html lang="fr">
<?php
require_once '../../utils/common.php';
require_once SITE_ROOT . 'partials/head.php';
require_once SITE_ROOT . 'partials/header.php';
require_once SITE_ROOT . 'utils/database.php';

if (!isset($_GET['recherchePseudo'])) {
    $_GET['recherchePseudo'] = '';
}

$score_table = obtenirScoreTable($pdo, $_GET['recherchePseudo']);
?>



<body>
    <div class="titre">
        SCORES
    </div>

    <section class="scoreshtml">

        <div class="scores">
            <form method="get" style="width: 100%;">
                <span class="scoresRecherche">
                    <input type="submit" id="scoresRechercheBouton" style="display: none;">
                    <label for="scoresRechercheBouton">
                    <img src="<?= PROJECT_FOLDER ?>assets/images/recherche.png" class="scoresRechercheImage">
                    </label>
                    <input type="text" name="recherchePseudo" placeholder="Recherche" id="scoresRechercheEntree" value="<?= $_GET['recherchePseudo'] ?>">
                </span>
            </form>
            <table class="styledTable">

                <thead>
                    <tr>
                        <th>Nom du jeu</th>
                        <th>Pseudo du joueur</th>
                        <th>Niveau de difficulté</th>
                        <th>Score (en sec)</th>
                        <th>Date et Heure de la partie</th>
                    </tr>
                </thead>
                <?php for ($i = 0; $i < sizeof($score_table); $i++) : ?>
                    <tr <?php if ($score_table[$i]->id == $_SESSION['userId']) : ?>class="activeRow" <?php endif; ?>>
                        <td><?php echo $score_table[$i]->nomJeu ?> </td>
                        <td><?php echo $score_table[$i]->pseudo ?> </td>
                        <td><?php echo $score_table[$i]->difficulte ?> </td>
                        <td><?php echo $score_table[$i]->score ?> </td>
                        <td><?php echo $score_table[$i]->dateHeureScore ?> </td>
                    </tr>
                <?php endfor; ?>
            </table>
        </div>
    </section>
</body>
<?php require_once SITE_ROOT . 'partials/footer.php'; ?>