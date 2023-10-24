<!DOCTYPE html>
<html lang="fr">
<?php require_once SITE_ROOT . 'partials/head.php' ?>

<body>
    <header>
        <?php $page = basename($_SERVER["PHP_SELF"]); ?>
        <div class="header">
            <span class="header_titre">
                <a href="<?= PROJECT_FOLDER ?>index.php" style="color: orange; color: white; text-decoration: none;">The Power Of Memory</a>
            </span>
            <span class="header_bouton">
                <a href="<?= PROJECT_FOLDER ?>index.php" <?php if ($page == "index.php") : ?>style="color: orange;" <?php endif; ?>class="header_link">ACCUEIL</a>
            </span>
            <span class="header_bouton">
                <a href="<?= PROJECT_FOLDER ?>games/memory/memory.php" <?php if ($page == "memory.php") : ?>style="color: orange;" <?php endif; ?>class="header_link">JEU</a>
            </span>
            <span class="header_bouton">
                <a href="<?= PROJECT_FOLDER ?>games/memory/scores.php" <?php if ($page == "scores.php") : ?>style="color: orange;" <?php endif; ?>class="header_link">SCORES</a>
            </span>
            <span class="header_bouton">
                <a href="<?= PROJECT_FOLDER ?>contact.php" <?php if ($page == "contact.php") : ?>style="color: orange;" <?php endif; ?>class="header_link">NOUS CONTACTER</a>
            </span>
            <span>
                <a href="<?= PROJECT_FOLDER ?>myAccount.php"><img src="<?= PROJECT_FOLDER ?>assets\images\profile.png" class="header_logo" <?php if ($page == "myAccount.php") : ?>style="background-color:orange;" <?php endif; ?>></a>
            </span>
        </div>
    </header>
</body>

</html>