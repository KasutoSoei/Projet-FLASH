<!DOCTYPE html>
<html lang="fr">
<?php require 'partials/head.php'; ?>

<body>
    <div class="chatContainer">
        <div id="chatHeader">
            Chat général
        </div>
        <div id="chatMessages">
            <div class="message">
                <div class="messageSender info">Moi</div>
                <div class="test">
                    <div class="messageContent">Salut la team</div>
                </div>
                <div class="date info">Aujourd'hui à 15h22</div>
            </div>
            <div class="message2">
                <div class="messageSender2 info">Joueur 1</div>
                <div class="messageContent2">Lorem ipsum dolor sit amet</div>
                <div class="date2 info">Aujourhui à 15h22</div>
            </div>
            <div class="message2">
                <div class="messageSender2 info">Joueur 1</div>
                <div class="messageContent2">tsais le mec qui parle en latin</div>
                <div class="date2 info">Aujourd'hui à 15h22</div>
            </div>
            <div class="message">
                <div class="messageSender info">Moi</div>
                <div class="test">
                    <div class="messageContent">t'es trop une galere</div>
                </div>
                <div class="date info">Aujourd'hui à 15h22</div>
            </div>
        </div>
        <div id="chatInput">
            <input type="text" id="messageInput" placeholder="Votre message...">
            <button id="sendBouton">Envoyer</button>
        </div>
    </div>
</body>

</html>