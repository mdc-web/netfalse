<?php
session_start();
include 'model/config.php';
include 'model/connexionDb.php';
include 'model/users.php';
include 'model/items.php';
include 'model/note.php';


?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel="stylesheet" href="./assets/css/style.css">
    </head>
    <body>
<!------navbar------>
        <nav>
            <div class="left">
                <img src="./assets/media/logoNetfalse (300 × 100 px).svg">
                <a href="index.php?view/home">Accueil</a>
                <a href="index.php?viewCategorie">categorie</a>
                <a href="index.php?inscription">inscription</a>
                
            </div>
            <div class="right">
                <p><i class="fas fa-search"></i></p>
                    <?php
                        if (isset($_SESSION['role']) && $_SESSION['role'] === 'membre') { ?>
                                <a href="index.php?spaceUsers">Mon compte</a>
                                <a href="index.php?deconnexion" name="deco">deconnexion</a>
                        <?php  } else if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') { ?>
                            <div class="navAdmin">
                                <a href="index.php?spaceAdmin">espace admin</a>
                                <a href="index.php?deconnexion" name="deco">deconnexion</a>
                            </div>
                        <?php } else { ?>
                                <a href="index.php?connexion">connexion</a>
                    <?php } ?>
            </div>    
        </nav>


    <?php
        if (isset($_GET['home'])) {
            include 'controller/controllerGet.php';
            include 'controller/note.php';
            include 'controller/page.php';
            include 'view/home.php';
        } else if (isset($_GET['spaceAdmin'])) {
            include 'view/spaceAdmin.php';
        } else if (isset($_GET['connexion'])){
            include 'controller/connexionUsers.php';
            include 'view/connexion.php';
        }else if (isset($_GET['inscription'])){
            include 'controller/controllerUsers.php';
            include 'view/inscription.php';
        }else if (isset($_GET['spaceUsers'])){
            include 'controller/controllerUsers.php';
            include 'controller/getUser&del.php';
            include 'view/spaceUsers.php';
        } else if (isset($_GET['deconnexion'])){
            include 'controller/deconnexion.php';
        } else if (isset($_GET['listItems'])){
            include 'controller/controllerItems.php';
            include 'controller/controllerGet.php';
            include 'controller/note.php';
            include 'controller/page.php';
            include 'view/listItems.php';
        } else if (isset($_GET['listUsers'])){
            include 'controller/getUser&del.php';
            include 'view/listUsers.php';
        } else if (isset($_GET['viewCategorie'])){
            include 'controller/controllerGet.php';
            include 'controller/note.php';
            include 'controller/page.php';
            include 'view/viewCategorie.php';
        } else if (isset($_GET['viewItems'])){
            include 'controller/controllerGet.php';
            include 'controller/note.php';
            include 'view/viewItems.php';
        } else {
            include 'controller/controllerGet.php';
            include 'controller/note.php';
            include 'controller/page.php';
            include 'view/home.php';
        }
    ?>
<!------footer------>
    <footer>
      <p>&copy 2022-2022 Netfalse, Inc.</p>
      <p>MDC web &copy 2022</p>
    </footer>
    <script src="https://kit.fontawesome.com/fa7f4a1136.js" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
    </body>
</html>