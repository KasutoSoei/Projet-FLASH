<!DOCTYPE html>
<html lang="fr">
<?php 
require_once SITE_ROOT . 'partials/head.php';
require_once SITE_ROOT . 'utils/database.php';

if (!isset($_SESSION['userId']))
{
    $_SESSION['userId'] = 0;
}
?>

<body>
    <header>
        <?php $page = basename($_SERVER["PHP_SELF"]); ?>
        <div class="header">
            <span class="headerTitre">
                <a href="<?= PROJECT_FOLDER ?>index.php" style="color: orange; color: white; text-decoration: none;">The Power Of Memory</a>
            </span>
            <span class="headerBouton">
                <a href="<?= PROJECT_FOLDER ?>index.php" <?php if ($page == "index.php") : ?>style="color: orange;" <?php endif; ?>class="headerLink">ACCUEIL</a>
            </span>
            <span class="headerBouton">
                <a href="<?= PROJECT_FOLDER ?>games/memory/memory.php" <?php if ($page == "memory.php") : ?>style="color: orange;" <?php endif; ?>class="headerLink">JEU</a>
            </span>
            <span class="headerBouton">
                <a href="<?= PROJECT_FOLDER ?>games/memory/scores.php" <?php if ($page == "scores.php") : ?>style="color: orange;" <?php endif; ?>class="headerLink">SCORES</a>
            </span>
            <span class="headerBouton">
                <a href="<?= PROJECT_FOLDER ?>contact.php" <?php if ($page == "contact.php") : ?>style="color: orange;" <?php endif; ?>class="headerLink">NOUS CONTACTER</a>
            </span>
            <?php if ($_SESSION['userId'] == 0): ?>
                <a href="<?= PROJECT_FOLDER ?>login.php"><img src="<?= PROJECT_FOLDER ?>userFiles/<?= $_SESSION['userId'] ?>/profile.png" class="headerLogo"></a>
            <?php else: ?>
            <span class="headerProfile">
                <a href="<?= PROJECT_FOLDER ?>myAccount.php"><img src="<?= PROJECT_FOLDER ?>userFiles/<?= $_SESSION['userId'] ?>/profile.png" class="headerLogoConnected"></a>
                <a href="<?= PROJECT_FOLDER ?>myAccount.php" <?php if ($page == "myAccount.php") : ?>style="color: orange;" <?php endif; ?> class="headerPseudo"><?php echo getPseudo($pdo, $_SESSION['userId'])?></a>
            </span>
            <?php endif; ?>
        </div>
    </header>
</body>

</html>