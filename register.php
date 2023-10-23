<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="icon" href="assets/images/icone.png">
    <title>Inscription</title>
</head>
<section class="registerhtml">
    <body>
        <header>
            <div class="header">
                <span class="header_titre">
                    <a href="index.php" style="color: white; text-decoration: none;">The Power Of Memory</a>
                </span>
                <span class="header_bouton">
                    <a href="index.php" class="header_link">ACCUEIL</a>
                </span>
                <span class="header_bouton">
                    <a href="memory.php" class="header_link">JEU</a>
                </span>
                <span class="header_bouton">
                    <a href="scores.php" class="header_link">SCORES</a>
                </span>
                <span class="header_bouton">
                    <a href="contact.php" class="header_link">NOUS CONTACTER</a>
                </span>
                <span>
                    <a href="myAccount.php"><img src="assets\images\profile.png" class="header_logo"></a>
                </span>
            </div>
        </header>
    
        <div class="register_titre">
            INSCRIPTION
        </div>
        <div class="inscription">
            <form action="myAccount.php" style="width: 100%;">
                <input type="email" placeholder="Email" required="required" class="inscription_entree">
                <input type="text" placeholder="Pseudo" required="required" class="inscription_entree">
                <input type="password" placeholder="Mot de passe" required="required" class="inscription_entree">
                <input type="password" placeholder="Confirmez le mot de passe" required="required" class="inscription_entree">
                <input type="submit" value="Inscription" class="inscription_bouton">
            </form>
            <span style="font-size: 2vmin;">
                Vous avez déjà un compte ? <a href="login.php" class="register_link">Connectez-vous</a> !
            </span>
        </div>
        
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
    <footer>
        <div class="main">
            
            <div class="info">
                <h3>Information</h3>

                <p class="line-space">Quisque commodo facilisis purus, interdum volutpat arcu viverra sed.</p>
                <p><span class="orange">Tél :</span> 06 07 08 09 10</p>
                <p><span class="orange">E-mail :</span> <span class="udline">Support@powerofmemory.com</span></p>
                <p><span class="orange">Location :</span> Cergy</p>
                <div class="logo">
                    <a href="https://facebook.com" target="_blank"><img src="assets/Images/fb.png"></a>
                    <a href="https://pinterest.fr" target="_blank"><img src="assets/Images/pinterest.png"></a>
                    <a href="https://x.com" target="_blank"><img src="assets/Images/twitter.png"></a>
                    <a href="https://plus.google.com" target="_blank"><img src="assets/Images/ggl.png"></a>
                    <a href="https://instagram.com" target="_blank"><img src="assets/Images/ig.png"></a>
                </div>

            </div>

        
            <div class="POM">
                <h3>Power Of Memory</h3>

                <p><span class="orange">&bull;</span> <a href="memory.php">Jouer !</a></p>
                <p><span class="orange">&bull;</span> <a href="scores.php">Les scores</a></p>
                <p><span class="orange">&bull;</span> <a href="contact.php">Nous contacter</a></p>             
            </div>

        </div>

        

        <div class="copyright"><p>Copyright &copy; 2023 Tous droits réservés</p></div>


    </footer>
    </body>
</section>
