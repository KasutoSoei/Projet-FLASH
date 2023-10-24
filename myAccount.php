<!DOCTYPE html>
<html lang="fr">
<?php
require_once 'utils/common.php';
require_once SITE_ROOT . 'partials/head.php';
require_once SITE_ROOT . 'partials/header.php';
require_once SITE_ROOT . 'chat.php';
?>
<section class="myaccounthtml">

    <body>

        <div class="myAccount_titre">
            MON ESPACE
        </div>

        <div class="myAccount">
            <span>
                <img src="<?= PROJECT_FOLDER ?>assets\images\profile.png" style="border-radius: 100%; width: 15vmin; height: auto;"></a>
            </span>
            <span style="font-size: 5vmin;">
                MemoryMaster
                <img src="<?= PROJECT_FOLDER ?>assets/images/rewrite.png" style="width: 4vmin;">
            </span>
            <span>
                <div class="myAccount_stats">
                    <span class="myAccount_stats_case">
                        Parties jouées <br>
                        <strong style="font-size: 7vmin; color: indigo; -webkit-text-stroke: 1px darkgray;">128</strong>
                    </span>
                    <span class="myAccount_stats_case">
                        Temps de jeu total <br>
                        <strong style="font-size: 7vmin; color: indigo; -webkit-text-stroke: 1px darkgray;">25:45:38</strong>
                    </span>
                    <span class="myAccount_stats_case">
                        Meilleur temps <br>
                        <strong style="font-size: 7vmin; color: indigo; -webkit-text-stroke: 1px darkgray;">01:09</strong>
                    </span>
                </div>
            </span>
        </div>

        <div class="myAccount_confidentialites">
            <div class="myAccount_changer">
                <p class="myAccount_changer_titre">Changer d'email</p>
                <form action="myAccount.php">
                    <input type="email" placeholder="Ancien email" required="required" class="myAccount_entree">
                    <input type="email" placeholder="Nouvel email" required="required" class="myAccount_entree">
                    <input type="password" placeholder="Mot de passe" required="required" class="myAccount_entree">
                    <input type="submit" value="Confirmer" class="myAccount_bouton">
                </form>
            </div>
            <div class="myAccount_changer">
                <p class="myAccount_changer_titre">Changer de mot de passe</p>
                <form action="myAccount.php">
                    <input type="password" placeholder="Ancien mot de passe" required="required" class="myAccount_entree">
                    <input type="password" placeholder="Nouveau mot de passe" required="required" class="myAccount_entree">
                    <input type="password" placeholder="Confirmez le nouveau mot de passe" required="required" class="myAccount_entree">
                    <input type="submit" value="Confirmer" class="myAccount_bouton">
                </form>
            </div>
        </div>
        <?php require_once SITE_ROOT . 'partials/footer.php'; ?>
    </body>
</section>