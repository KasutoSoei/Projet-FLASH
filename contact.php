<!DOCTYPE html>
<html lang="fr">
<?php
require_once 'utils/common.php';
require_once SITE_ROOT . 'partials/head.php';
require_once SITE_ROOT . 'partials/header.php';
?>


<body>

    <div class="titre">
        NOUS CONTACTER
    </div>

    <section class="contacthtml">

        <div class="contact">
            <span class="contact_coordonnees">
                <img src="<?= PROJECT_FOLDER ?>assets/images/phone.png" class="contactLogo">
                06 07 08 09 10
            </span>
            <span class="contact_coordonnees">
                <img src="<?= PROJECT_FOLDER ?>assets/images/mail.png" class="contactLogo">
                support@powerofmemory.com
            </span>
            <span class="contact_coordonnees">
                <img src="<?= PROJECT_FOLDER ?>assets/images/location.png" class="contactLogo">
                Cergy
            </span>
        </div>

        <?php if ($_POST == null) : ?>
            <form method="post" class="mail">
                <div class="mail_identite">
                    <input type="text" name='nom' placeholder="Nom" required="required" class="mailEntree" style="width: 49%;">
                    <input type="email" name='email' placeholder="Email" required="required" class="mailEntree" style="width: 49%;">
                </div>
                <input type="text" name='sujet' placeholder="Sujet" required="required" class="mailEntree">
                <input type="text" name='message' placeholder="Message" required="required" class="mailEntree" style="height: 32vh;">
                <input type="submit" value="Envoyer" class="mailBouton">
            </form>

        <?php else :
            $header = 'De:' . $_POST['nom'] . "A partir de l'adresse" . $_POST['email'];
            mail('kristian.chou.fr@gmail.com', $_POST['sujet'], $_POST['message'], $header);
        endif; ?>
        <?php require SITE_ROOT . 'partials/footer.php'; ?>
    </section>
</body>