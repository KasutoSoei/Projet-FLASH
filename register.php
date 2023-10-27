<!DOCTYPE html>
<html lang="fr">
<?php
require_once 'utils/common.php';
require_once SITE_ROOT . 'partials/head.php';
require_once SITE_ROOT . 'partials/header.php';
require_once SITE_ROOT . 'utils/database.php';
?>

<body>

    <div class="titre">
        INSCRIPTION
    </div>

    <section class="registerhtml">

        <div class="inscription">

            <?php if ($_POST == null) : ?>
                <form method="post" style="width: 100%;">
                    <input type="email" name="email" placeholder="Email" required="required" class="inscriptionEntree">
                    <input type="text" name="pseudo" placeholder="Pseudo" required="required" class="inscriptionEntree">
                    <input type="password" name="mdp" placeholder="Mot de passe" required="required" class="inscriptionEntree">
                    <input type="password" name="mdpConfirme" placeholder="Confirmez le mot de passe" required="required" class="inscriptionEntree">
                    <input type="submit" value="Inscription" class="inscriptionBouton">
                </form>
                <span style="font-size: 2vmin;">
                    Vous avez déjà un compte ? <a href="login.php" class="registerLink">Connectez-vous</a> !
                </span>

            <?php elseif (
                preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*]).{8,}$/', $_POST['mdp'])
                &&
                preg_match('/^.{4,}$/', $_POST['pseudo'])
                &&
                ($_POST['mdp'] == $_POST['mdpConfirme'])
                &&
                (!estPseudoExistant($pdo, $_POST['pseudo']))
                &&
                (!estEmailExistant($pdo, $_POST['email']))
            ) :
                $_POST['mdp'] = hash('sha256', $_POST['mdp']);
                $_SESSION['userId'] = insereUtilisateurEtRetourneId($pdo, $_POST['email'], $_POST['mdp'], $_POST['pseudo']);
                mkdir(SITE_ROOT . "userFiles/" . $_SESSION['userId']); //creer le dossier
                copy(SITE_ROOT . 'userFiles/0/profile.png', SITE_ROOT . 'userFiles/' . $_SESSION['userId'] . '/profile.png'); //ajoute une image de profil par defaut
                header("Refresh: 0; url=" . PROJECT_FOLDER . "games/memory/memory.php"); //actualise la page et redirige vers la page de jeu
            ?>

            <?php else : ?>
                <form method="post" style="width: 100%;">
                    <input type="email" value="<?= $_POST['email'] ?>" name="email" placeholder="Email" required="required" class="inscriptionEntree">
                    <?php if (estEmailExistant($pdo, $_POST['email'])) : ?>
                        <p style="font-size: 2vmin; color:red">Email déjà utilisé</p>
                    <?php endif; ?>
                    <input type="text" value="<?= $_POST['pseudo'] ?>" name="pseudo" placeholder="Pseudo" required="required" class="inscriptionEntree">

                    <?php if (!preg_match('/^.{4,}$/', $_POST['pseudo']) || (estPseudoExistant($pdo, $_POST['pseudo']))) : ?>
                        <p style="font-size: 2vmin; color:red">Pseudo trop court ou déjà utilisé</p>
                    <?php endif; ?>

                    <input type="password" name="mdp" placeholder="Mot de passe" required="required" class="inscriptionEntree">

                    <?php if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*]).{8,}$/', $_POST['mdp'])) : ?>
                        <p style="font-size: 2vmin; color:red">Format de mot de passe invalide</p>
                    <?php endif; ?>

                    <input type="password" name="mdpConfirme" placeholder="Confirmez le mot de passe" required="required" class="inscriptionEntree">

                    <?php if ($_POST['mdp'] != $_POST['mdpConfirme']) : ?>
                        <p style="font-size: 2vmin; color:red">Les mots de passe ne correspondent pas</p>
                    <?php endif; ?>


                    <input type="submit" value="Inscription" class="inscriptionBouton">
                </form>
                <span style="font-size: 2vmin;">
                    Vous avez déjà un compte ? <a href="login.php" class="registerLink">Connectez-vous</a> !
                </span>

            <?php endif; ?>
        </div>
    </section>
</body>
<?php require_once SITE_ROOT . 'partials/footer.php'; ?>