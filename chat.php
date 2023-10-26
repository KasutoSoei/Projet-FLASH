<!DOCTYPE html>
<html lang="fr">
<?php
require_once 'utils/common.php';
require_once SITE_ROOT . 'partials/head.php';
require_once SITE_ROOT . 'partials/header.php';
require_once SITE_ROOT . 'utils/database.php';

$messages = obtenirMessagesChat($pdo, $_SESSION['userId']);
?>

<body>
    <div class="titre">
        CHAT
    </div>

    <section class="chathtml">

        <div class="chat">
            <?php foreach ($messages as $message) : ?>

                <?php if ($message->isSender) : ?>
                    <div class="chatMessageBoxEnvoyeur">
                        <div class="chatMessageEnvoye">
                            <img src="<?= PROJECT_FOLDER ?>/userFiles/<?= $message->UtilisateurId ?>/profile.png" class="chatPP">

                            <div class="chatInfosMessage" style="  align-items: end;">
                                <p style="color: yellow;">
                                    <?php echo $message->pseudo ?>
                                </p>
                                <p style=" overflow-wrap: break-word; text-align: right">
                                    <?php echo $message->messageChat ?>
                                </p>
                            </div>
                        </div>
                        <p class="chatMessageHeure">
                            Aujourd'hui, à <?php echo $message->heure ?>
                        </p>
                    </div>

                <?php else : ?>
                    <div class="chatMessageBoxReceveur">
                        <div class="chatMessageRecu">
                            <img src="<?= PROJECT_FOLDER ?>/userFiles/<?= $message->UtilisateurId ?>/profile.png" class="chatPP">

                            <div class="chatInfosMessage" style="  align-items: start;">
                                <p style="color: green;">
                                    <?php echo $message->pseudo ?>
                                </p>
                                <p style=" overflow-wrap: break-word;">
                                    <?php echo $message->messageChat ?>
                                </p>
                            </div>
                        </div>
                        <p class="chatMessageHeure">
                            Aujourd'hui, à <?php echo $message->heure ?>
                        </p>
                    </div>

                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </section>
</body>
<?php require_once SITE_ROOT . 'partials/footer.php'; ?>