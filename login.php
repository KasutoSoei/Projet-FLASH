<!DOCTYPE html>
<html lang="fr">
<?php
require_once 'utils/common.php';
require_once SITE_ROOT . 'utils/database.php';
require_once SITE_ROOT . 'partials/head.php';
require_once SITE_ROOT . 'partials/header.php';
?>
<title>
    TPOM - Connexion
</title>

<body>
    <div class="titre">
        CONNEXION
    </div>

    <section class="loginhtml">

        <?php if ($_POST == null) : ?>
            <div class="connexion">
                <form method="post" style="width: 100%;">
                    <input type="email" name="email" placeholder="Email" required="required" class="loginEntree">
                    <input type="password" name="mdp" placeholder="Mot de passe" required="required" class="loginEntree">
                    <input type="submit" value="Connexion" class="loginBouton">
                </form>
                <span style="font-size: 2vmin;">
                    Vous n'avez pas de compte ? <a href="<?= PROJECT_FOLDER ?>register.php" class="loginLink">Inscrivez-vous</a> !
                </span>
            </div>

        <?php elseif (compteExiste($pdo, $_POST['email'], $_POST['mdp'])) :
            $_SESSION['userId'] = obtenirId($pdo, $_POST['email'], $_POST['mdp']);
            header("Refresh: 0; url=" . PROJECT_FOLDER . "games/memory/memory.php"); //actualise la page et redirige vers la page de jeu 
        ?>

        <?php else : ?>
            <div class="connexion">
                <form method="post" style="width: 100%;">
                    <input type="email" name="email" value="<?= $_POST['email'] ?>" placeholder="Email" required="required" class="loginEntree">
                    <input type="password" name="mdp" placeholder="Mot de passe" required="required" class="loginEntree">
                    <p style="color: red; font-size: 2vmin;">Aucun compte n'a été trouvé</p>
                    <span style="display: flex; justify-content: space-between;">
                        <input type="submit" value="Connexion" class="loginBouton">
                        <a href="register.php" class="loginLink" style="margin-top: 2vh; margin-right: 1vw; font-size: 1.5vmin; height: 1.5vmin;">Mot de passe oublié ?</a>
                    </span>
                </form>
                <span style="font-size: 2vmin;">
                    Vous n'avez pas de compte ? <a href="<?= PROJECT_FOLDER ?>register.php" class="loginLink">Inscrivez-vous</a> !
                </span>
            </div>
        <?php endif; ?>
    </section>
</body>
<?php require_once SITE_ROOT . 'partials/footer.php'; ?>