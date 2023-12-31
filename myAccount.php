<!DOCTYPE html>
<html lang="fr">
<?php
require_once 'utils/common.php';
require_once SITE_ROOT . 'partials/head.php';
require_once SITE_ROOT . 'partials/header.php';
require_once SITE_ROOT . 'utils/database.php';

if (isset($_POST['deconnexion'])) {
    session_destroy();
    header('refresh:0; url=' . PROJECT_FOLDER . 'login.php');
}

if (isset($_POST['suppression'])) {
    unlink(SITE_ROOT . "userFiles/" . $_SESSION['userId'] . '/profile.png');
    rmdir(SITE_ROOT . "userFiles/" . $_SESSION['userId']); //supprime le dossier
    supprimerCompte($pdo, $_SESSION['userId']);
    session_destroy();
    header('refresh:0; url=' . PROJECT_FOLDER . 'register.php');
}
if (isset($_GET['changePseudo']) && !estPseudoExistant($pdo, $_GET['changePseudo'])) {
    header('refresh:1; url=' . PROJECT_FOLDER . 'myAccount.php');
}
?>
<title>
    TPOM - Mon Espace
</title>

<body>

    <div class="titre">
        MON ESPACE
    </div>

    <section class="myaccounthtml">

        <div class="myAccount">
            <span style="margin-left: 3vh;">

                <form action="myAccount.php" method="POST" enctype="multipart/form-data">
                    <input type="file" id="files" onchange="this.form.submit()" name="avatar" style="display:none;" accept="image/*">
                    <label for="files">
                        <img src="<?= PROJECT_FOLDER ?>userFiles/<?= $_SESSION['userId'] ?>/profile.png" id="myAccountPP">
                    </label>
                </form>
                <?php
                if (isset($_FILES['avatar'])) :
                    move_uploaded_file($_FILES['avatar']['tmp_name'], SITE_ROOT . 'userFiles/' . $_SESSION['userId'] . '/profile.png');
                endif;
                ?>
            </span>
            <span style="font-size: 5vmin;">
                <form method="get" form='changePseudo'>
                    <input type="text" name="changePseudo" value="<?= obtenirPseudo($pdo, $_SESSION['userId']) ?>" class="myAccountChangeNom" minlength="4" maxlength='20'>
                    <?php $change = false;
                    if (isset($_GET['changePseudo'])) :

                        if (estPseudoExistant($pdo, $_GET['changePseudo']) == 1) :
                    ?>
                            <p style="font-size: 2vmin; color:red;">Pseudo trop court ou déja utilisé</p>
                        <?php else : changePseudo($pdo, $_GET['changePseudo'], $_SESSION['userId']); ?>

                            <p style="font-size: 2vmin;">Votre pseudo a bien été changé</p>
                    <?php endif;
                    endif; ?>
                </form>
            </span>

            <span>
                <div class="myAccountStats">
                    <span class="myAccountStatsCase">
                        Parties jouées <br>
                        <strong style="font-size: 7vmin; color: indigo; -webkit-text-stroke: 1px darkgray;">
                            <?php echo obtenirNbPartiesJoueesUtilisateur($pdo, $_SESSION['userId']) ?>
                        </strong>
                    </span>
                    <span class="myAccountStatsCase">
                        Temps de jeu total <br>
                        <strong style="font-size: 7vmin; color: indigo; -webkit-text-stroke: 1px darkgray;">
                            <?php echo obtenirTempsJeuUtilisateur($pdo, $_SESSION['userId']) ?>
                        </strong>
                    </span>
                    <span class="myAccountStatsCase">
                        Meilleur temps <br>
                        <strong style="font-size: 7vmin; color: indigo; -webkit-text-stroke: 1px darkgray;">
                            <?php echo obtenirMeilleurScoreUtilisateur($pdo, $_SESSION['userId']); ?>
                        </strong>
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
                        <div id="mdpInput">
                            <input type="password" name="mdp" placeholder="Nouveau mot de passe" required="required" class="myAccountEntree">
                        </div>
                        <div id="mdpPuissance">
                            <span id="faible"></span>
                            <span id="moyen"></span>
                            <span id="fort"></span>
                        </div>
                        <div id="mdpInfo"></div>
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

        <form method="post" class="myAccountGestion">
            <input type="submit" class="myAccountGestionBouton" name="deconnexion" value="Déconnexion">

            <input type="submit" class="myAccountGestionBouton" name="suppression" value="Supprimer le compte">
        </form>
    </section>
</body>
<script src="assets/js/mdpPuissance.js"></script>
<?php require_once SITE_ROOT . 'partials/footer.php'; ?>