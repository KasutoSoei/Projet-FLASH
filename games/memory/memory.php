<!DOCTYPE html>
<html lang="fr">
<?php
require_once '../../utils/common.php';
require_once SITE_ROOT . 'partials/head.php';
require_once SITE_ROOT . 'partials/header.php';
require_once SITE_ROOT . 'chat.php';
?>
<section class="memoryhtml">

    <body>
        <div class="game_titre">
            JEU
        </div>

        <div class="game_theme">
            <span>
                Theme :
            </span>
            <span>
                <a href="EasyCartes.php" class="game_theme_button">Cartes</a>
            </span>
            <span>
                <a href="EasyVoitures.php" class="game_theme_button">Voitures</a>
            </span>
            <span>
                <a href="EasyWaifus.php" class="game_theme_button">Waifus</a>
            </span>
        </div>

        <div class="game_difficulte">
            <span>
                Difficulté :
            </span>
            <span>
                <a href="EasyCartes.php" class="game_difficulte_facile">Facile</a>
            </span>
            <span>
                <a href="MediumCartes.php" class="game_difficulte_moyen">Moyen</a>
            </span>
            <span>
                <a href="HardCartes.php" class="game_difficulte_difficile">Difficile</a>
            </span>
        </div>

        <div style="margin-top: 7vh; color: white; font-size: 2vmin;">
            Bienvenue sur la page du jeu ! La grille s'affichera lorsque vous aurez choisi une difficulté. Si vous voulez les règles, les voici : <br>
        </div>

        <div class="regles">
            <p>
                <strong style="text-decoration: underline;">Grille</strong> :

            <p style="margin-left: 3vw;">
                La grille possède 5x5 cases, 10x10 cases ou 20x20 cases pour respectivement les difficultés Facile, Moyen, Difficile.
            </p>

            <strong style="text-decoration: underline;">Comment jouer</strong> ?

            <p style="margin-left: 3vw;">
                On choisit 2 cases dans la grille :
            <ul style="margin-left: 3vw;">
                <li>
                    Si les images dans les 2 cases sont identiques, alors les cases restent retournées.
                </li>
                <li>
                    Si les images ne sont pas identiques, alors les cases se retournent face cachée.
                </li>
                <li>
                    <i style="color: gray;">(En Facile uniquement)</i> Si une des deux images est un joker, alors la deuxième case ainsi que l'une de ses paires restent retournées.
                </li>
            </ul>
            </p>

            <strong style="text-decoration: underline;">But</strong> :

            <p style="margin-left: 3vw;">
                Le but est de retouner toutes les cases de la grille. <br>
                Vous pouvez ensuite comparer votre temps à celui des meilleurs dans le <a href="<?= PROJECT_FOLDER ?>games/memory/scores.php" class="regles_lien">classement</a>
            </p>

            <strong style="text-decoration: underline;">Difficultés</strong> :

            <p style="margin-left: 3vw;">
                En difficulté Facile, un joker est présent, il permet de retourner n'importe quelle paire. <br>
                En difficulté Moyen il y a 2 paires par image avec un total de 25 images différentes. <br>
                En Difficile, il y a également 2 paires par image mais pour 50 images différentes. <br>
            </p>
            </p>
            Voilà, vous savez tout. <a href="<?= PROJECT_FOLDER ?>login.php" class="regles_lien">Connectez-vous</a> et faites place à votre mémoire !
        </div>
        <?php require_once SITE_ROOT . 'partials/footer.php'; ?>
    </body>
</section>