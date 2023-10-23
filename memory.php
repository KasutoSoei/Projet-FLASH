<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="icon" href="assets/images/icone.png">
    <title>Jeu</title>
</head>
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
<section class="memoryhtml">
    <body>
        <div class="game_titre">
            JEU
        </div>
    
        <div class="game_theme">
            <span>
                Theme :
            </span>
            <span>
                <a href="EasyCartes.php" class="game_theme_button">Cartes</a>
            </span>
            <span>
                <a href="EasyVoitures.php" class="game_theme_button">Voitures</a>
            </span>
            <span>
                <a href="EasyWaifus.php" class="game_theme_button">Waifus</a>
            </span>
        </div>
    
        <div class="game_difficulte">
            <span>
                Difficulté :
            </span>
            <span>
                <a href="EasyCartes.php" class="game_difficulte_facile">Facile</a>
            </span>
            <span>
                <a href="MediumCartes.php" class="game_difficulte_moyen">Moyen</a>
            </span>
            <span>
                <a href="HardCartes.php" class="game_difficulte_difficile">Difficile</a>
            </span>
        </div>
    
        <div style="margin-top: 7vh; color: white; font-size: 2vmin;">
            Bienvenue sur la page du jeu ! La grille s'affichera lorsque vous aurez choisi une difficulté. Si vous voulez les règles, les voici : <br>
        </div>
        
        <div class="regles">
            <p>
                <strong style="text-decoration: underline;">Grille</strong> :
    
                <p style="margin-left: 3vw;">
                    La grille possède 5x5 cases, 10x10 cases ou 20x20 cases pour respectivement les difficultés Facile, Moyen, Difficile.
                </p>
    
                <strong style="text-decoration: underline;">Comment jouer</strong> ?
    
                <p style="margin-left: 3vw;">
                    On choisit 2 cases dans la grille : 
                    <ul style="margin-left: 3vw;">
                        <li>
                            Si les images dans les 2 cases sont identiques, alors les cases restent retournées.
                        </li>
                        <li>
                            Si les images ne sont pas identiques, alors les cases se retournent face cachée.
                        </li>
                        <li>
                            <i style="color: gray;">(En Facile uniquement)</i> Si une des deux images est un joker, alors la deuxième case ainsi que l'une de ses paires restent retournées.
                        </li>
                    </ul>
                </p>
    
                <strong style="text-decoration: underline;">But</strong> :
    
                <p style="margin-left: 3vw;">
                    Le but est de retouner toutes les cases de la grille. <br>
                    Vous pouvez ensuite comparer votre temps à celui des meilleurs dans le <a href="scores.php" class="regles_lien">classement</a>
                </p>
    
                <strong style="text-decoration: underline;">Difficultés</strong> :
    
                <p style="margin-left: 3vw;">
                    En difficulté Facile, un joker est présent, il permet de retourner n'importe quelle paire. <br>
                    En difficulté Moyen il y a 2 paires par image avec un total de 25 images différentes. <br>
                    En Difficile, il y a également 2 paires par image mais pour 50 images différentes. <br>
                </p>
            </p>
            Voilà, vous savez tout. <a href="login.php" class="regles_lien">Connectez-vous</a> et faites place à votre mémoire !
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
</section>
