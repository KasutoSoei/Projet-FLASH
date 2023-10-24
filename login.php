<!DOCTYPE html>
<html lang="fr">
<?php
require_once 'utils/common.php';
require_once SITE_ROOT . 'partials/head.php';
require_once SITE_ROOT . 'partials/header.php';
require_once SITE_ROOT . 'chat.php';
?>
<section class="loginhtml">

    <body>
        <div class="login_titre">
            CONNEXION
        </div>
        <div class="connexion">
            <form action="myAccount.php" style="width: 100%;">
                <input type="email" placeholder="Email" required="required" class="login_entree">
                <input type="password" placeholder="Mot de passe" required="required" class="login_entree">
                <span style="display: flex; justify-content: space-between;">
                    <input type="submit" value="Connexion" class="login_bouton">
                    <a href="register.php" class="login_link" style="margin-top: 2vh; margin-right: 1vw; font-size: 1.5vmin; height: 1.5vmin;">Mot de passe oublié ?</a>
                </span>
            </form>
            <span style="font-size: 2vmin;">
                Vous n'avez pas de compte ? <a href="<?= PROJECT_FOLDER ?>register.php" class="login_link">Inscrivez-vous</a> !
            </span>
        </div>
        <?php require_once SITE_ROOT . 'partials/footer.php'; ?>
    </body>
</section>