<!DOCTYPE html>
<html lang="fr">    
<?php 
    require_once 'utils/common.php';
    require_once SITE_ROOT.'partials/head.php';
    require_once SITE_ROOT.'partials/header.php';
    require_once SITE_ROOT.'chat.php';
?>
<section class="indexhtml">
    <body>
        <div class="accueil">       
            <h1 style="font-size: 6vmin;">BIENVENUE DANS NOTRE STUDIO !</h1>
            <span style="color: rgb(200, 200, 200); font-size: 2.8vmin;">Venez challenger les cerveaux les plus agiles !</span>
            <a href="memory.php" id="play"> <strong>JOUER !</strong></a>
        </div>        
        <div class="present">
            <img src="https://www.ass-security.fr/blog/wp-content/uploads/2021/08/console-theme.jpg" class="present_img">
            <img src="https://previews.123rf.com/images/rastudio/rastudio1702/rastudio170204329/72501883-jeune-homme-d-affaires-africain-sur-un-trottinette-homme-d-affaires-avec-mallette-d-équitation-pour.jpg" class="present_img">
            <img src="https://png.pngtree.com/background/20211215/original/pngtree-casino-vertical-poker-poster-picture-image_1492215.jpg" class="present_img">
        </div>
        <div class="present_texte">
            <div class="box">
                <span>
                    <strong class="nb">01</strong> 
                </span>
                <span style="color: gray; font-size: 2vmin;">
                    <strong style="color: white; font-size: 2vmin;">Lorem ipsum</strong><br><br>
                    dolor sit amet, consectetur adipiscing 
                    elit. Morbi luctus ipsum auctor mattis placerat. Vivamus consequat convallis luctus. Interdum et malesuada 
                    fames ac ante ipsum primis in faucibus. In fermentum tristique vestibulum. Sed pulvinar purus nec.
                </span>       
            </div>
            <div class="box">
                <span>
                    <strong class="nb">02</strong>
                </span>
                <span style="color: gray; font-size: 2vmin;">
                    <strong style="color: white; font-size: 2vmin;">Lorem ipsum</strong><br><br>
                    dolor sit amet, consectetur adipiscing 
                    elit. Morbi luctus ipsum auctor mattis placerat. Vivamus consequat convallis luctus. Interdum et malesuada 
                    fames ac ante ipsum primis in faucibus. In fermentum tristique vestibulum. Sed pulvinar purus nec.
                </span>  
            </div>
            <div class="box">
                <span>
                    <strong class="nb">03</strong>
                </span>
                <span style="color: gray; font-size: 2vmin;">
                    <strong style="color: white; font-size: 2vmin;">Lorem ipsum</strong><br><br>
                    dolor sit amet, consectetur adipiscing 
                    elit. Morbi luctus ipsum auctor mattis placerat. Vivamus consequat convallis luctus. Interdum et malesuada 
                    fames ac ante ipsum primis in faucibus. In fermentum tristique vestibulum. Sed pulvinar purus nec.
                </span>         
            </div>
        </div>
        <div class="stats">
            <img src="https://staticctf.ubisoft.com/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/3ynMy93xlHyh1KG0U3NEmZ/4be66477587b930e7f06d65d85e43ec8/wd2-ubicom-game_info-connect_with_friends-v1.jpg" class="stats_img">
            <div class="stats_grand_carre">
                <div class="stats_ligne">
                    <span class="stats_petit_carre" style="background-color: rgb(52, 37, 154); font-size: 2vmin;">
                        <p>
                            <strong style="font-size: 5vmin;">310</strong> <br><br>
                            Parties Jouées
                        </p>
                    </span>
                    <span class="stats_petit_carre" style="background-color: rgb(75, 159, 101); font-size: 2vmin;">
                        <p>
                            <strong style="font-size: 5vmin;">1020</strong> <br><br>
                            Joueurs Connectés
                        </p>
                    </span>
                </div>
                <div class="stats_ligne">
                    <span class="stats_petit_carre" style="background-color: rgb(170, 46, 163); font-size: 2vmin;">
                        <p>
                            <strong style="font-size: 5vmin;">00:00:10</strong> <br><br>
                            Temps Record
                        </p>
                    </span>
                    <span class="stats_petit_carre" style="background-color: rgb(218, 145, 61); font-size: 2vmin;">
                        <p>
                            <strong style="font-size: 5vmin;">21 300</strong> <br><br>
                            Joueurs Inscrits
                        </p>
                    </span>
                </div>
            </div>
        </div>
        <div class="ekip">
            <div id="text">
                <p><span>Notre Équipe</span></p>
                <p>Quisque commodo facilisis purus. interdum volutoat arcu viverra sec.</p>
                <img id="transi" src="<?= PROJECT_FOLDER ?>assets/images/Transi.jpg">
            </div>
            <section class="container">
                <div class="item">
                    <img class="pp" src="<?= PROJECT_FOLDER ?>assets/images/Kristian.jpg">
                    <p><span>Kristian (avec un K)</span></p>
                    <p class="text">Game Developer</p>
                            <div class="reseaux">
                                <a href="https://facebook.com" target="_blank"><img src="<?= PROJECT_FOLDER ?>assets/Images/fb.png"></a>
                                <a href="https://pinterest.fr" target="_blank"><img src="<?= PROJECT_FOLDER ?>assets/Images/pinterest.png"></a>
                                <a href="https://x.com" target="_blank"><img src="<?= PROJECT_FOLDER ?>assets/Images/twitter.png"></a>                    
                            </div>
                            
                        </div>
                        
                        <div class="item">
                            <img class="pp" src="<?= PROJECT_FOLDER ?>assets/images/Rizz.JPG">
                            <p><span>ELWAN DECRYPTE</span></p>
                            <p class="text">Game Developer</p>
                            <div class="reseaux">
                                <a href="https://facebook.com" target="_blank"><img src="<?= PROJECT_FOLDER ?>assets/Images/fb.png"></a>
                                <a href="https://pinterest.fr" target="_blank"><img src="<?= PROJECT_FOLDER ?>assets/Images/pinterest.png"></a>
                                <a href="https://x.com" target="_blank"><img src="<?= PROJECT_FOLDER ?>assets/Images/twitter.png"></a>                    
                            </div>
                        </div>
                        
                        <div class="item">
                    <img class="pp" src="<?= PROJECT_FOLDER ?>assets/images/Gwendal.jpg">
                    <p><span>L'AIGRI ORIGINEL</span></p>
                    <p class="text">Game Developer</p>
                    <div class="reseaux">
                        <a href="https://facebook.com" target="_blank"><img src="<?= PROJECT_FOLDER ?>assets/Images/fb.png"></a>
                        <a href="https://pinterest.fr" target="_blank"><img src="<?= PROJECT_FOLDER ?>assets/Images/pinterest.png"></a>
                        <a href="https://x.com" target="_blank"><img src="<?= PROJECT_FOLDER ?>assets/Images/twitter.png"></a>                    
                    </div>
                </div>
            </section>
        </div>
    </body>
    <?php require SITE_ROOT.'partials/footer.php'; ?>
</section>
    