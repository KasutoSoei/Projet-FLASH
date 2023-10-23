<!DOCTYPE html>
<html lang="fr">
<?php require_once SITE_ROOT.'partials/head.php' ?>
<body>
<header>
        <div class="header" >
            <span class="header_titre">
                <a href="<?= PROJECT_FOLDER ?>index.php" style="color: white; text-decoration: none;">The Power Of Memory</a>
            </span>
            <span class="header_bouton">
                <a href="<?= PROJECT_FOLDER ?>index.php" class="header_link">ACCUEIL</a>
            </span>
            <span class="header_bouton">
                <a href="<?= PROJECT_FOLDER ?>games/memory/memory.php" class="header_link">JEU</a>
            </span>
            <span class="header_bouton">
                <a href="<?= PROJECT_FOLDER ?>games/memory/scores.php" class="header_link">SCORES</a>
            </span>
            <span class="header_bouton">
                <a href="<?= PROJECT_FOLDER ?>contact.php" class="header_link">NOUS CONTACTER</a>
            </span>
            <span>
                <a href="<?= PROJECT_FOLDER ?>myAccount.php"><img src="<?= PROJECT_FOLDER ?>assets\images\profile.png" class="header_logo"></a>
            </span>
        </div>
    </header>
</body>
</html>