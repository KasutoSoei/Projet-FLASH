<!DOCTYPE html>
<html lang="fr">
<?php
require_once 'utils/common.php';
require_once SITE_ROOT . 'partials/head.php';
require_once SITE_ROOT . 'partials/header.php';
require_once SITE_ROOT . 'utils/database.php';

if (isset($_GET['GIF'])) {
    $gif = file_get_contents('https://api.thecatapi.com/v1/images/search?mime_types=gif');
    $gif = json_decode($gif)[0]->url;
    envoiMessage($pdo, $_SESSION['userId'], '<img src=' . $gif . '>');
    header('refresh: 0; url = ' . PROJECT_FOLDER . 'chat.php');
}

$messages = obtenirMessagesChat($pdo, $_SESSION['userId']);
?>
<title>
    TPOM - Chat
</title>

<body>
    <div class="titre">
        CHAT
    </div>

    <section id="chathtml">
        <div id="chat"></div>

        <?php if ($_SESSION['userId'] != 0) : ?>
            <form id="chatEnvoi">
                <input type="text" id="chatMessageEntree" placeholder="Envoyer un message">
                <input type="button" id="GIF" style="display: none;">
                <label for="GIF">
                    <img src="<?= PROJECT_FOLDER ?>assets/images/GIF.png" class="chatBouton">
                </label>
                <input type="submit" id="envoi" style="display: none;">
                <label for="envoi">
                    <img src="<?= PROJECT_FOLDER ?>assets/images/sendMessage.png" class="chatBouton">
                </label>
            </form>
        <?php endif; ?>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="assets/js/chat.js"></script>
    <script>
        $('#chatEnvoi').on('submit', (e) => {
            let message = document.getElementById('chatMessageEntree').value;
            e.preventDefault();
            if (document.getElementById('chatErreur')) {
                document.getElementById('chatErreur').remove();
            }
            if (message.length >= 1 && !message.includes("<")) {
                $.ajax({
                    url: "utils/envoyerMessage.php",
                    type: "post",
                    data: {
                        envoi: message,
                    },
                    success: function() {
                        document.getElementById('chatMessageEntree').value = '';
                    },
                });
            } else {
                let chatErreur = document.createElement('p')
                chatErreur.id = "chatErreur"
                chatErreur.innerHTML = "Votre message doit contenir au moins 3 caractères et ne doit pas contenir de \"<\""
                document.getElementById('chathtml').appendChild(chatErreur);
            }
        })

        document.getElementById('GIF').addEventListener('click', function(e) {
            $.ajax({
                url: "https://api.thecatapi.com/v1/images/search?mime_types=gif",
                success: function(json) {
                    const message = json[0].url;
                    e.preventDefault();
                    if (document.getElementById('chatErreur')) {
                        document.getElementById('chatErreur').remove();
                    }
                    $.ajax({
                        url: "utils/envoyerMessage.php",
                        type: "post",
                        data: {
                            envoi: '<img src = "' + message + '">',
                        },
                    });
                }
            });
        })
    </script>
</body>
<?php require_once SITE_ROOT . 'partials/footer.php'; ?>