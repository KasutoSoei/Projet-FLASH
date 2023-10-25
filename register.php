<!DOCTYPE html>
<html lang="fr">
<?php
require_once 'utils/common.php';
require_once SITE_ROOT . 'partials/head.php';
require_once SITE_ROOT . 'partials/header.php';
require_once SITE_ROOT . 'chat.php';
require_once SITE_ROOT . 'utils/database.php';





$pdoPseudoExistant = $pdo->prepare('SELECT pseudo FROM Utilisateur WHERE pseudo = :pseudo;');
$pdoEmailExistant = $pdo->prepare('SELECT email FROM Utilisateur WHERE email = :email;');
$pdoInsertionUtilisateur = $pdo->prepare('INSERT INTO Utilisateur (email, mdp, pseudo) VALUES(:email, :mdp, :pseudo)');


?>
<section class="registerhtml">

    <body>
        <div class="register_titre">
            INSCRIPTION
        </div>
        <div class="inscription">
            <?php if ($_POST == NULL) : ?>

                <form method="post" style="width: 100%;">
                    <input type="email" name="email" placeholder="Email" required="required" class="inscription_entree">
                    <input type="text" name="pseudo" placeholder="Pseudo" required="required" class="inscription_entree">
                    <input type="password" name="mdp" placeholder="Mot de passe" required="required" class="inscription_entree">
                    <input type="password" name="mdp_confirme" placeholder="Confirmez le mot de passe" required="required" class="inscription_entree">
                    <input type="submit" value="Inscription" class="inscription_bouton">
                </form>
                <span style="font-size: 2vmin;">
                    Vous avez déjà un compte ? <a href="login.php" class="register_link">Connectez-vous</a> !
                </span>
                <?php else :
                $pdoPseudoExistant->execute([':pseudo' => $_POST['pseudo']]);
                $pseudoExistant = $pdoPseudoExistant->fetch();

                $pdoEmailExistant->execute([':email' => $_POST['email']]);
                $emailExistant = $pdoEmailExistant->fetch();

                        

                if (
                    preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*]).{8,}$/', $_POST['mdp'])
                    &&
                    preg_match('/^.{4,}$/', $_POST['pseudo'])
                    &&
                    ($_POST['mdp'] == $_POST['mdp_confirme'])
                    &&
                    ($pseudoExistant == NULL)
                    &&
                    ($emailExistant == NULL)
                ) :
                    $_POST['mdp'] = hash('sha256', $_POST['mdp']);
                    $pdoInsertionUtilisateur ->execute([':email'=> $_POST['email'], ':mdp'=> $_POST['mdp'], ':pseudo'=> $_POST['pseudo']]);
                ?>
                    <p style="font-size: 2vmin;">Vous êtes bien inscrit!</p>
                    

                <?php else : ?>

                    <form method="post" style="width: 100%;">
                        <input type="email" value="<?= $_POST['email'] ?>" name="email" placeholder="Email" required="required" class="inscription_entree">
                        <?php if ($emailExistant != NULL) : ?>
                            <p style="font-size: 2vmin; color:red">Email déjà utilisé</p>
                        <?php endif; ?>
                        <input type="text" value="<?= $_POST['pseudo'] ?>" name="pseudo" placeholder="Pseudo" required="required" class="inscription_entree">

                        <?php if (!preg_match('/^.{4,}$/', $_POST['pseudo']) || ($pseudoExistant != NULL)) : ?>
                            <p style="font-size: 2vmin; color:red">Pseudo trop court ou déjà utilisé</p>
                        <?php endif; ?>

                        <input type="password" name="mdp" placeholder="Mot de passe" required="required" class="inscription_entree">

                        <?php if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*]).{8,}$/', $_POST['mdp'])) : ?>
                            <p style="font-size: 2vmin; color:red">Format de mot de passe invalide</p>
                        <?php endif; ?>

                        <input type="password" name="mdp_confirme" placeholder="Confirmez le mot de passe" required="required" class="inscription_entree">

                        <?php if ($_POST['mdp'] != $_POST['mdp_confirme']) : ?>
                            <p style="font-size: 2vmin; color:red">Les mots de passe ne correspondent pas</p>
                        <?php endif; ?>

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