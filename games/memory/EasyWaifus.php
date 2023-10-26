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
                <a href="EasyWaifus.php" class="game_difficulte_facile">Facile</a>
            </span>
            <span>
                <a href="MediumWaifus.php" class="game_difficulte_moyen">Moyen</a>
            </span>
            <span>
                <a href="HardWaifus.php" class="game_difficulte_difficile">Difficile</a>
            </span>
        </div>

        <div class="game">
            <span class="game_score">
                <p>Score : 30</p>
                <p>Temps : 00:05</p>
            </span>
            <table class="game_grille">
                <tr>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeWaifus/CardBack.jpeg" style="height: 19vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeWaifus/CardBack.jpeg" style="height: 19vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeWaifus/CardBack.jpeg" style="height: 19vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeWaifus/CardBack.jpeg" style="height: 19vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeWaifus/CardBack.jpeg" style="height: 19vmin;">
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeWaifus/CardBack.jpeg" style="height: 19vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeWaifus/CardBack.jpeg" style="height: 19vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeWaifus/Joker.png" style="height: 19vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeWaifus/CardBack.jpeg" style="height: 19vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeWaifus/CardBack.jpeg" style="height: 19vmin;">
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeWaifus/02.jpeg" style="height: 19vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeWaifus/CardBack.jpeg" style="height: 19vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeWaifus/CardBack.jpeg" style="height: 19vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeWaifus/CardBack.jpeg" style="height: 19vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeWaifus/CardBack.jpeg" style="height: 19vmin;">
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeWaifus/CardBack.jpeg" style="height: 19vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeWaifus/CardBack.jpeg" style="height: 19vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeWaifus/CardBack.jpeg" style="height: 19vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeWaifus/02.jpeg" style="height: 19vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeWaifus/CardBack.jpeg" style="height: 19vmin;">
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeWaifus/CardBack.jpeg" style="height: 19vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeWaifus/CardBack.jpeg" style="height: 19vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeWaifus/CardBack.jpeg" style="height: 19vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeWaifus/CardBack.jpeg" style="height: 19vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeWaifus/CardBack.jpeg" style="height: 19vmin;">
                    </td>
                </tr>
            </table>
        </div>
    </section>
</body>
<?php require_once SITE_ROOT . 'partials/footer.php'; ?>