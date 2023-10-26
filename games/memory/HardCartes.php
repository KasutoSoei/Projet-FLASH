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
        <div class="gameTitre">
            JEU
        </div>

        <div class="game_theme">
            <span>
                Theme :
            </span>
            <span>
                <a href="HardCartes.php" class="game_theme_button">Cartes</a>
            </span>
            <span>
                <a href="HardVoitures.php" class="game_theme_button">Voitures</a>
            </span>
            <span>
                <a href="HardWaifus.php" class="game_theme_button">Waifus</a>
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

        <div class="game">
            <span class="game_score">
                <p>Score : 20</p>
                <p>Temps : 01:09</p>
            </span>
            <table class="game_grille">
                <tr>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/13s.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/13s.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                    <td>
                        <img src="<?= PROJECT_FOLDER ?>assets/images/ThemeCartes/back.png" style="height: 4.5vmin;">
                    </td>
                </tr>
            </table>
        </div>
        <?php require_once SITE_ROOT . 'partials/footer.php'; ?>
    </body>
</section>