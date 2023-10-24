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
            <?php if ($_POST==NULL) : ?>
                
                <form method="post" style="width: 100%;">
                    <input type="email" name="mail" placeholder="Email" required="required" class="inscription_entree">
                    <input type="text" name="pseudo" placeholder="Pseudo" required="required" class="inscription_entree">
                    <input type="password" name="mdp" placeholder="Mot de passe" required="required" class="inscription_entree">
                    <input type="password" name="mdp_cofirme" placeholder="Confirmez le mot de passe" required="required" class="inscription_entree">
                    <input type="submit" value="Inscription" class="inscription_bouton">
                </form>
                <span style="font-size: 2vmin;">
                    Vous avez déjà un compte ? <a href="login.php" class="register_link">Connectez-vous</a> !
                </span>
                <?php else :

                if (preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*]).{8,}$/', $_POST['mdp']) && preg_match('/^.{4,}$/', $_POST['pseudo'])) : ?>
                    <p style="font-size: 2vmin;">Vous êtes bien connecté !</p>
                <?php else: ?>
                    <form method="post" style="width: 100%;">
                        <input type="email" value="<?= $_POST['mail'] ?>" name="mail" placeholder="Email" required="required" class="inscription_entree">
                        <input type="text" value="<?= $_POST['pseudo'] ?>" name="pseudo" placeholder="Pseudo" required="required" class="inscription_entree">
                        <input type="password" name="mdp" placeholder="Mot de passe" required="required" class="inscription_entree">
                        <input type="password" name="mdp_cofirme" placeholder="Confirmez le mot de passe" required="required" class="inscription_entree">
                        <input type="submit" value="Inscription" class="inscription_bouton">
                    </form>
                    <span style="font-size: 2vmin;">
                        Vous avez déjà un compte ? <a href="login.php" class="register_link">Connectez-vous</a> !
                    </span>
                <?php endif; ?>

            <?php endif; ?>
        </div>
        <?php require_once SITE_ROOT . 'partials/footer.php'; ?>
    </body>
</section>