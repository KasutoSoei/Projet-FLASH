<!DOCTYPE html>
<html lang="fr">
<?php
require_once 'utils/common.php';
require_once SITE_ROOT . 'partials/head.php';
require_once SITE_ROOT . 'partials/header.php';
require_once SITE_ROOT . 'chat.php';
?>
<section class="contacthtml">

    <body>

        <div class="contactTitre">
            NOUS CONTACTER
        </div>

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

        <form action="memory.php">
            <div class="mail">
                <div class="mail_identite">
                    <input type="text" placeholder="Nom" required="required" class="mailEntree" style="width: 49%;">
                    <input type="email" placeholder="Email" required="required" class="mailEntree" style="width: 49%;">
                </div>
                <input type="text" placeholder="Sujet" required="required" class="mailEntree">
                <input type="text" placeholder="Message" required="required" class="mailEntree" style="height: 32vh;">
                <input type="submit" value="Envoyer" class="mailBouton">
            </div>
        </form>
        <?php require SITE_ROOT . 'partials/footer.php'; ?>
    </body>
</section>