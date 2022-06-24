<?php
ob_start();
session_start();//DECLARATION DE LA SESSION
//INCLUDE DES MODELES
include 'model/config.php';
include 'model/connexionDb.php';
include 'model/users.php';
include 'model/items.php';
include 'model/note.php';


?>
<!----STRUCTURE HTML------>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset='utf-8'>
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />
        <link rel="stylesheet" href="./assets/css/style.css">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    </head>
    <body>
<!------NAVBAR------>
        <div class="overlay-menu-mobile" onclick="closeMenuMobile()"></div>
        <nav>
            <div class="left">
                <a href="index.php?home" class="logo"><img src="./assets/media/logoNetfalse (300 × 100 px).svg" class="logoImg"></a>
            </div> 

            <div class="nav-burger">
                <div class="menu-burger-close" onclick="closeMenuMobile()">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" id="test" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </div>
                
                <div class="right">
                    <a href="index.php?view/home">Accueil</a>
                    <a href="index.php?viewCategorie">Catégorie</a>

                    <?php       //CONDITION D'AFFICHAGE
                                if (isset($_SESSION['role']) && $_SESSION['role'] === 'membre') { ?>
                                    <a class="lienNav" href="index.php?spaceUsers">Mon compte</a>
                                    <a href="index.php?deconnexion" name="deco">Deconnexion</a>
                        <?php  }else if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') { ?>
                                    <a href="index.php?spaceAdmin">Espace admin</a>
                                    <a href="index.php?deconnexion" name="deco">Deconnexion</a>
                        <?php } else { ?>
                                    <a href="index.php?inscription">Inscription</a>
                                    <a href="index.php?connexion">Connexion</a>
                            <?php } ?>
                        
                        <form action="" method="post">
                        <i class="fas fa-search"></i>
                            <input class="inputSearch" type="search"  placeholder="Search" name="rechercheArticle" />
                            <button class="buttonSearch" type="submit" name="btnrechercheArticleHome" value="btnrechercheArticle">search</button>
                        </form>
                </div>
            </div> 
            <div class="menu_burger" onclick="openMenuMobile()">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </div>
        </nav>

<!-----CONTENU DES PAGES----->
        <main class="site-content">


            <?php //APPEL DES PAGES AVEC INCLUDES SOUS CONDITION
                if (isset($_GET['home'])) {
                    include 'controller/controllerGet.php';
                    include 'controller/note.php';
                    include 'view/home.php';
                } else if (isset($_GET['spaceAdmin'])) {
                    include 'controller/controllerGet.php';
                    include 'view/spaceAdmin.php';
                } else if (isset($_GET['connexion'])){
                    include 'controller/connexionUsers.php';
                    include 'controller/controllerGet.php';
                    include 'view/connexion.php';
                }else if (isset($_GET['inscription'])){
                    include 'controller/controllerUsers.php';
                    include 'controller/controllerGet.php';
                    include 'view/inscription.php';
                }else if (isset($_GET['spaceUsers'])){
                    include 'controller/getUser&del.php';
                    include 'controller/controllerGet.php';
                    include 'view/spaceUsers.php';
                } else if (isset($_GET['deconnexion'])){
                    include 'controller/deconnexion.php';
                } else if (isset($_GET['listItems'])){
                    include 'controller/controllerItems.php';
                    include 'controller/controllerGet.php';
                    include 'controller/note.php';
                    include 'view/listItems.php';
                } else if (isset($_GET['listUsers'])){
                    include 'controller/getUser&del.php';
                    include 'controller/controllerGet.php';
                    include 'view/listUsers.php';
                } else if (isset($_GET['viewCategorie'])){
                    include 'controller/controllerGet.php';
                    include 'controller/note.php';
                    include 'view/viewCategorie.php';
                } else if (isset($_GET['viewItems'])){
                    include 'controller/controllerGet.php';
                    include 'controller/note.php';
                    include 'view/viewItems.php';
                }else if (isset($_GET['action'])){
                    include 'controller/controllerGet.php';
                    include 'controller/note.php';
                    include 'view/action.php';
                }else if (isset($_GET['histoire'])){
                    include 'controller/controllerGet.php';
                    include 'controller/note.php';
                    include 'view/histoire.php';
                }else if (isset($_GET['syfy'])){
                    include 'controller/controllerGet.php';
                    include 'controller/note.php';
                    include 'view/syfy.php';
                }else if (isset($_GET['anime'])){
                    include 'controller/controllerGet.php';
                    include 'controller/note.php';
                    include 'view/anime.php';
                } else {
                    include 'controller/controllerGet.php';
                    include 'controller/note.php';
                    include 'view/home.php';
                }
            ?>
        </main>
<!------FOOTER------>
        <footer>
            <p>&copy Netfalse 2022 Projet d'examen</p>
            <p>Edit by <a href="https://www.mdc-web.fr/">mdc web</a></p>
        </footer>

<!------INCLUDE DES SCRIPT JS------>
        <script src="https://kit.fontawesome.com/fa7f4a1136.js" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script src="assets/js/burger.js"></script>
        <script src="assets/js/note.js"></script>
        <script src="assets/js/slider.js"></script>
        <script src="assets/js/fixe.js"></script>
        <script src="assets/js/scrollDiv.js"></script>
    </body>

</html>