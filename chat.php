<!DOCTYPE html>
<html lang="fr">
<?php require 'partials/head.php'; ?>

<body>
    <div class="chat-container">
        <div class="chat-header">
            Chat général
        </div>
        <div class="chat-messages">
            <div class="message">
                <div class="message-sender info">Moi</div>
                <div class="test">
                    <div class="message-content">Salut la team</div>
                </div>
                <div class="date info">Aujourd'hui à 15h22</div>
            </div>
            <div class="message2">
                <div class="message-sender2 info">Joueur 1</div>
                <div class="message-content2">Lorem ipsum dolor sit amet</div>
                <div class="date2 info">Aujourhui à 15h22</div>
            </div>
            <div class="message2">
                <div class="message-sender2 info">Joueur 1</div>
                <div class="message-content2">tsais le mec qui parle en latin</div>
                <div class="date2 info">Aujourd'hui à 15h22</div>
            </div>
            <div class="message">
                <div class="message-sender info">Moi</div>
                <div class="test">
                    <div class="message-content">t'es trop une galere</div>
                </div>
                <div class="date info">Aujourd'hui à 15h22</div>
            </div>
        </div>
        <div class="chat-input">
            <input type="text" id="message-input" placeholder="Votre message...">
            <button id="send-button">Envoyer</button>
        </div>
    </div>
</body>

</html>