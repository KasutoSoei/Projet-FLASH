<!DOCTYPE html>
<html lang="fr">
<?php 
    require_once '../../utils/common.php';
    require_once SITE_ROOT.'partials/head.php';
    require_once SITE_ROOT.'partials/header.php';
    require_once SITE_ROOT.'chat.php';
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
                <tbody>
                    <tr>
                        <td>Memory</td>
                        <td>Joueur</td>
                        <td>Facile</td>
                        <td>45</td>
                        <td>11/10/2023 14:30:00</td>
                    </tr>
                    <tr class="active-row">
                        <td>Memory</td>
                        <td>Moi</td>
                        <td>Moyen</td>
                        <td>60</td>
                        <td>11/10/2023 09:15:00</td>
                    </tr>
                    <tr>
                        <td>Memory</td>
                        <td>Joueur</td>
                        <td>Difficile</td>
                        <td>35</td>
                        <td>11/10/2023 20:45:00</td>
                    </tr>    
                </tbody>
            </table>
        </div>
        <?php require_once SITE_ROOT.'partials/footer.php'; ?>
    </body>
</section>
