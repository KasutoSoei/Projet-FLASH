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

        <div class="contact_titre">
            NOUS CONTACTER
        </div>

        <div class="contact">
            <span class="contact_coordonnees">
                <img src="<?= PROJECT_FOLDER ?>assets/images/phone.png" class="contact_logo">
                06 07 08 09 10
            </span>
            <span class="contact_coordonnees">
                <img src="<?= PROJECT_FOLDER ?>assets/images/mail.png" class="contact_logo">
                support@powerofmemory.com
            </span>
            <span class="contact_coordonnees">
                <img src="<?= PROJECT_FOLDER ?>assets/images/location.png" class="contact_logo">
                Cergy
            </span>
        </div>

        <form action="memory.php">
            <div class="mail">
                <div class="mail_identite">
                    <input type="text" placeholder="Nom" required="required" class="mail_entree" style="width: 49%;">
                    <input type="email" placeholder="Email" required="required" class="mail_entree" style="width: 49%;">
                </div>
                <input type="text" placeholder="Sujet" required="required" class="mail_entree">
                <input type="text" placeholder="Message" required="required" class="mail_entree" style="height: 32vh;">
                <input type="submit" value="Envoyer" class="mail_bouton">
            </div>
        </form>
        <?php require SITE_ROOT . 'partials/footer.php'; ?>
    </body>
</section>