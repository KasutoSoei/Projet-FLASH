<!DOCTYPE html>
<html lang="fr">
<?php
require_once 'utils/common.php';
require_once SITE_ROOT . 'partials/head.php';
require_once SITE_ROOT . 'partials/header.php';
require_once SITE_ROOT . 'chat.php';
require_once SITE_ROOT . 'utils/database.php';
?>
<form method="POST" enctype="multipart/form-data">
     <input type="file" name="avatar" accept="image/png">
     <input type="submit" name="envoyer" value="Envoyer le fichier">
</form>
<?php
if(isset($_FILES['avatar'])):
    move_uploaded_file($_FILES['avatar']['tmp_name'], SITE_ROOT . 'userFiles/' . $_SESSION['userId'] . '/profile.png');
endif;
?>
<section class="myaccounthtml">

    <body>

        <div class="myAccountTitre">
            MON ESPACE
        </div>

        <div class="myAccount">
            <span>
                <img src="<?= PROJECT_FOLDER ?>userFiles/<?= $_SESSION['userId'] ?>/profile.png" style="border-radius: 100%; width: 15vmin; height: auto;"></a>
            </span>
            <span style="font-size: 5vmin;">
                <!--<?php if ($_POST == NULL) : ?>
                    <form method="post">
                        <input type="text" name="pseudo" value="Player" class="myAccount_changenom">
                    </form>
                <?php else : ?>
                    <form method="post">
                        <input type="text" name="pseudo" value="<?= $_POST['pseudo'] ?>" class="myAccount_changenom">
                    </form>
                <?php endif; ?>
                <img src="<?= PROJECT_FOLDER ?>assets/images/rewrite.png" style="height: 6vh"> -->
            </span>
            <span>
                <div class="myAccountStats">
                    <span class="myAccountStatsCase">
                        Parties jouées <br>
                        <strong style="font-size: 7vmin; color: indigo; -webkit-text-stroke: 1px darkgray;">128</strong>
                    </span>
                    <span class="myAccountStatsCase">
                        Temps de jeu total <br>
                        <strong style="font-size: 7vmin; color: indigo; -webkit-text-stroke: 1px darkgray;">25:45:38</strong>
                    </span>
                    <span class="myAccountStatsCase">
                        Meilleur temps <br>
                        <strong style="font-size: 7vmin; color: indigo; -webkit-text-stroke: 1px darkgray;">01:09</strong>
                    </span>
                </div>
            </span>
        </div>

        <div id="myAccountConfidentialites">
            <div class="myAccountChanger">
                <p class="myAccountChangerTitre">Changer d'email</p>
                <?php if (empty($_POST['emailAncienEmail']) && empty($_POST['emailEmail']) && empty($_POST['emailMdp'])) : ?>
                    <form method="post" id="changeEmail">
                        <input type="mail" name='emailAncienEmail' placeholder="Ancien Email" required="required" class="myAccountEntree">
                        <input type="mail" name='emailEmail' placeholder="Nouvel Email" required="required" class="myAccountEntree">
                        <input type="password" name='emailMdp' placeholder="Mot de passe" required="required" class="myAccountEntree">
                        <input type="submit" value="Confirmer" class="myAccountBouton" form="changeEmail">
                    </form>
                    <?php else :
                    if (
                        estBonEmail($pdo, $_POST['emailAncienEmail'], $_SESSION['userId'])
                        &&
                        !estEmailExistant($pdo, $_POST['emailEmail'])
                        &&
                        estBonMdp($pdo, $_POST['emailMdp'], $_SESSION['userId'])
                    ) :
                        changeEmail($pdo, $_POST['emailEmail'], $_SESSION['userId']);
                    ?>
                        <p style="font-size: 2vmin;">Votre email a bien été changé</p>

                    <?php else : ?>
                        <form method="post" id='changeEmail'>
                            <input type="mail" name='emailAncienEmail' placeholder="Ancien Email" required="required" class="myAccountEntree">
                            <?php if (!estBonEmail($pdo, $_POST['emailAncienEmail'], $_SESSION['userId'])) : ?>
                                <p style="font-size: 2vmin; color:red">Email incorrect</p>
                            <?php endif; ?>

                            <input type="mail" name='emailEmail' placeholder="Nouvel Email" required="required" class="myAccountEntree">
                            <?php if (estEmailExistant($pdo, $_POST['emailEmail'])) : ?>
                                <p style="font-size: 2vmin; color:red">Email déjà utilisé ou est le même que votre précédent</p>
                            <?php endif; ?>

                            <input type="password" name='emailMdp' placeholder="Mot de passe" required="required" class="myAccountEntree">
                            <?php if (!estBonMdp($pdo, $_POST['emailMdp'], $_SESSION['userId'])) : ?>
                                <p style="font-size: 2vmin; color:red">Mot de passe incorrect</p>
                            <?php endif; ?>

                            <input type="submit" value="Confirmer" class="myAccountBouton" form='changeEmail'>
                        </form>

                    <?php endif; ?>

                <?php endif; ?>
            </div>
            <div class="myAccountChanger">
                <p class="myAccountChangerTitre">Changer de mot de passe</p>

                <?php if (empty($_POST['ancienMdp']) && empty($_POST['mdp']) && empty($_POST['mdpConfirme'])) : ?>
                    <form method="post" id="changeMdp">
                        <input type="password" name='ancienMdp' placeholder="Ancien mot de passe" required="required" class="myAccountEntree">
                        <input type="password" name='mdp' placeholder="Nouveau mot de passe" required="required" class="myAccountEntree">
                        <input type="password" name='mdpConfirme' placeholder="Confirmez le nouveau mot de passe" required="required" class="myAccountEntree">
                        <input type="submit" value="Confirmer" class="myAccountBouton" form="changeMdp">
                    </form>

                <?php elseif (
                    estBonMdp($pdo, $_POST['ancienMdp'], $_SESSION['userId'])
                    &&
                    preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*]).{8,}$/', $_POST['mdp'])
                    &&
                    $_POST['mdp'] == $_POST['mdpConfirme']
                ) :
                    $_POST['mdp'] = hash('sha256', $_POST['mdp']);
                    changeMdp($pdo, $_POST['mdp'], $_SESSION['userId']);
                ?>
                    <p style="font-size: 2vmin;">Votre mot de passe a bien été changé</p>

                <?php else : ?>
                    <form method="post" id='changeMdp'>
                        <input type="password" name='ancienMdp' placeholder="Ancien mot de passe" required="required" class="myAccountEntree">
                        <?php if (!estBonMdp($pdo, $_POST['ancienMdp'], $_SESSION['userId'])) : ?>
                            <p style="font-size: 2vmin; color:red">Mot de passe incorrect</p>
                        <?php endif; ?>

                        <input type="password" name='mdp' placeholder="Nouveau mot de passe" required="required" class="myAccountEntree">
                        <?php if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*]).{8,}$/', $_POST['mdp'])) : ?>
                            <p style="font-size: 2vmin; color:red">Format de mot de passe invalide</p>
                        <?php endif; ?>

                        <?php if ($_POST['ancienMdp'] == $_POST['mdp']) : ?>
                            <p style="font-size: 2vmin; color:red">L'ancien et le nouveau mot de passe sont identiques</p>
                        <?php endif; ?>

                        <input type="password" name='mdpConfirme' placeholder="Confirmez le nouveau mot de passe" required="required" class="myAccountEntree">
                        <?php if ($_POST['mdp'] != $_POST['mdpConfirme']) : ?>
                            <p style="font-size: 2vmin; color:red">Les mots de passe ne correspondent pas</p>
                        <?php endif; ?>

                        <input type="submit" value="Confirmer" class="myAccountBouton" form='changeMdp'>
                    </form>

                <?php endif; ?>
            </div>
        </div>
        <div class="myAccountGestion">
            <input type="button" onclick="session_destroy()" value="Déconnexion" class="myAccountGestionBouton">
            <a href="login.php" class="myAccountGestionBouton" style="text-decoration: none;">Changer de compte</a>
            <input type="button" onclick="supprimerCompte($pdo, $_SESSION['userId']); $_SESSION['userId'] = 0;" value="Supprimer le compte" class="myAccountGestionBouton">
        </div>
        <?php require_once SITE_ROOT . 'partials/footer.php'; ?>
    </body>
</section>