<!DOCTYPE html>
<html lang="fr">
<?php
require_once 'utils/common.php';
require_once SITE_ROOT . 'partials/head.php';
require_once SITE_ROOT . 'partials/header.php';
require_once SITE_ROOT . 'chat.php';
?>
<section class="registerhtml">

    <body>
        <div class="register_titre">
            INSCRIPTION
        </div>
        <div class="inscription">
            <form action="myAccount.php" style="width: 100%;">
                <input type="email" placeholder="Email" required="required" class="inscription_entree">
                <input type="text" placeholder="Pseudo" required="required" class="inscription_entree">
                <input type="password" placeholder="Mot de passe" required="required" class="inscription_entree">
                <input type="password" placeholder="Confirmez le mot de passe" required="required" class="inscription_entree">
                <input type="submit" value="Inscription" class="inscription_bouton">
            </form>
            <span style="font-size: 2vmin;">
                Vous avez déjà un compte ? <a href="login.php" class="register_link">Connectez-vous</a> !
            </span>
        </div>
        <?php require_once SITE_ROOT . 'partials/footer.php'; ?>
    </body>
</section>