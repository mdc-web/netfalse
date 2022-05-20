<?php
session_start();
include 'model/config.php';
include 'model/connexionDb.php';
include 'model/users.php';
include 'model/items.php';
include 'model/note.php';


?>


<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel="stylesheet" href="./assets/css/style.css">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    </head>
    <body>
<!------navbar------>

        <nav>
            <div class="left">
                <img src="./assets/media/logoNetfalse (300 × 100 px).svg">
                <a href="index.php?view/home">Accueil</a>
                <a href="index.php?viewCategorie">categorie</a>
                <p><i class="fas fa-search"></i></p>
                <form action="" method="post">
                    <input class="inputSearch" type="search"  placeholder="Search" name="rechercheArticle" />
                    <button class="buttonSearch" type="submit" name="btnrechercheArticleHome" value="btnrechercheArticle">search</button>
                </form>
            </div>
            
            <div class="right">
                
                
                <?php if (empty($_SESSION)) { ?>
                    <a href="index.php?inscription">inscription</a>
                <?php }
                        if (isset($_SESSION['role']) && $_SESSION['role'] === 'membre') { ?>
                            <a href="index.php?spaceUsers">Mon compte</a>
                            <a href="index.php?deconnexion" name="deco">deconnexion</a>
                <?php  }else if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') { ?>
                            <a href="index.php?spaceAdmin">espace admin</a>
                            <a href="index.php?deconnexion" name="deco">deconnexion</a>
                <?php } else { ?>
                            <a href="index.php?inscription">inscription</a>
                            <a href="index.php?connexion">connexion</a>
                    <?php } ?>
            </div>    
        </nav>


    <?php
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
        } else {
            include 'controller/controllerGet.php';
            include 'controller/note.php';
            include 'view/home.php';
        }
    ?>
<!------footer------>
    <footer class="footer">
      <p>&copy 2022-2022 Netfalse, Inc.</p>
      <p>MDC web &copy 2022</p>
    </footer>
    <script src="https://kit.fontawesome.com/fa7f4a1136.js" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="assets/js/slider.js"></script>
    <script src="assets/js/fixe.js"></script>
    </body>
</html>