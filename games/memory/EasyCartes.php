<!DOCTYPE html>
<html lang="fr">
<?php
require_once '../../utils/common.php';
require_once SITE_ROOT . 'partials/head.php';
require_once SITE_ROOT . 'partials/header.php';
?>

<body>
    <div class="titre">
        JEU
    </div>

    <section class="memoryhtml">

        <div class="gameTheme">
            <span>
                Theme :
            </span>
            <span>
                <a href="EasyCartes.php" class="gameThemeBouton">Cartes</a>
            </span>
            <span>
                <a href="EasyVoitures.php" class="gameThemeBouton">Voitures</a>
            </span>
            <span>
                <a href="EasyWaifus.php" class="gameThemeBouton">Waifus</a>
            </span>
        </div>

        <div class="gameDifficulte">
            <span>
                Difficulté :
            </span>
            <span>
                <a href="EasyCartes.php" class="gameDifficulteFacile">Facile</a>
            </span>
            <span>
                <a href="MediumCartes.php" class="gameDifficulteMoyen">Moyen</a>
            </span>
            <span>
                <a href="HardCartes.php" class="gameDifficulteDifficile">Difficile</a>
            </span>
        </div>

        <div class="game">
            <span class="gameScore">
                <p>Score : 30</p>
                <p>Temps : 00:05</p>
            </span>
            <table class="gameGrille">
                <tr>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 19vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 19vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 19vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 19vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 19vmin;">
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 19vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 19vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/14.png" style="height: 19vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 19vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 19vmin;">
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/10d.png" style="height: 19vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 19vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 19vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 19vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 19vmin;">
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 19vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 19vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 19vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/10d.png" style="height: 19vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 19vmin;">
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 19vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 19vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 19vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 19vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 19vmin;">
                    </td>
                </tr>
            </table>
        </div>
    </section>
</body>
<?php require_once SITE_ROOT . 'partials/footer.php'; ?>