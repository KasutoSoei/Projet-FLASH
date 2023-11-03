<!DOCTYPE html>
<html lang="fr">
<?php
require_once '../../utils/common.php';
require_once SITE_ROOT . 'partials/head.php';
require_once SITE_ROOT . 'partials/header.php';
?>

<title>
    TPOM - Jeu
</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<body>
    <div class="titre">
        JEU
    </div>

    <section class="memoryhtml" id="section">

        <div id="introRegles" style="margin-top: 7vh; text-align: center; font-size: 2vmin;">
            Bienvenue sur la page du jeu ! La grille s'affichera lorsque vous serez connecté et que vous aurez choisi une difficulté et un thème. Si vous voulez les règles, les voici : <br>
        </div>

        <div id="regles">
            <strong style="text-decoration: underline;">Grille</strong> :

            <p style="margin-left: 3vw;">
                La grille possède 5x5 cases, 10x10 cases ou 20x20 cases pour respectivement les difficultés Facile, Moyen ou Difficile.
            </p>

            <br>

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

            <br>

            <strong style="text-decoration: underline;">But</strong> :

            <p style="margin-left: 3vw;">
                Le but est de retouner toutes les cases de la grille. <br>
                Vous pouvez ensuite comparer votre temps à celui des meilleurs dans le <a href="<?= PROJECT_FOLDER ?>games/memory/scores.php" class="reglesLien">classement</a>
            </p>

            <br>

            <strong style="text-decoration: underline;">Difficultés</strong> :

            <p style="margin-left: 3vw;">
                En difficulté Facile, un joker est présent, il permet de retourner n'importe quelle paire. <br>
                En difficulté Moyen il y a 2 paires par image avec un total de 25 images différentes. <br>
                En Difficile, il y a 4 paires par image mais pour 50 images différentes. <br>
            </p>

            <br>
            <?php if ($_SESSION['userId'] == 0) : ?>
                Voilà, vous savez tout. <a href="<?= PROJECT_FOLDER ?>login.php" class="reglesLien">Connectez-vous</a> et faites place à votre mémoire !
            <?php else : ?>
                Voilà, vous savez tout. Maintenant, faites place à votre mémoire !
            <?php endif; ?>
        </div>

        <?php if ($_SESSION['userId'] != 0) : ?>

            <form>
                <div id="gameOptions">
                    <div style="display: flex; flex-direction: column">
                        <select id="themes" class="gameOption">
                            <option value="">
                                Thème
                            </option>
                            <option value="ThemeCartes">
                                Cartes
                            </option>
                            <option value="ThemeVoitures">
                                Voitures
                            </option>
                            <option value="ThemeWaifus">
                                Waifus
                            </option>
                        </select>
                    </div>
                    <div style="display: flex; flex-direction: column">
                        <select id="difficultes" class="gameOption">
                            <option value="">
                                Difficulté
                            </option>
                            <option value="easy">
                                Easy
                            </option>
                            <option value="medium">
                                Medium
                            </option>
                            <option value="hard">
                                Hard
                            </option>
                        </select>
                    </div>
                </div>
                <input type="button" onclick="genererGrille()" value="Jouer" id="gameBouton">
        <?php endif; ?>
        <div class="popup" id="popup">
            <div class="popupFond"></div>
            <div class="popupContainer">
                Bien joué !
                <br>
                Votre score de <span id="scoreIci"> </span> à bien été enregistré !
                <br>
                <br>
                <p id="popupQuitter">QUITTER</p><p id="popupRejouer">REJOUER</p>
            </div>
        </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="../../assets/js/memory.js"></script>
</body>
<?php require_once SITE_ROOT . 'partials/footer.php'; ?>