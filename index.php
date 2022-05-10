<?php
session_start();
include 'model/config.php';
include 'model/connexionDb.php';
include 'model/users.php';
include 'model/items.php';


?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>

    </head>
    <body>

        <nav>
            <div>
                <a href="index.php?view/home">Accueil</a>
                <a href="index.php?viewCategorie">categorie</a>
                <a href="index.php?inscription">inscription</a>
                <ul>
                    <?php
                        if (isset($_SESSION['role']) && $_SESSION['role'] === 'membre') { ?>
                            <li>
                                <a href="index.php?deconnexion" name="deco">deconnexion</a>
                            </li>
                        <?php  } else if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') { ?>
                            <div class="navAdmin">
                                <a href="index.php?spaceAdmin">espace admin</a>
                                <a href="index.php?deconnexion" name="deco">deconnexion</a>
                            </div>
                        <?php } else { ?>
                            <li>
                                <a href="index.php?connexion">connexion</a>
                            </li>
                    <?php } ?>
                </ul>
            </div>
        </nav>


    <?php
        if (isset($_GET['home'])) {
            include 'controller/controllerGet.php';
            include 'view/home.php';
        } else if (isset($_GET['spaceAdmin'])) {
            include 'view/spaceAdmin.php';
        } else if (isset($_GET['connexion'])){
            include 'controller/connexionUsers.php';
            include 'view/inscription.php';
        }else if (isset($_GET['inscription'])){
            include 'controller/controllerUsers.php';
            include 'view/inscription.php';
        } else if (isset($_GET['deconnexion'])){
            include 'controller/deconnexion.php';
        } else if (isset($_GET['listItems'])){
            include 'controller/controllerItems.php';
            include 'controller/controllerGet.php';
            include 'view/listItems.php';
        } else if (isset($_GET['listUsers'])){
            include 'controller/getUser&del.php';
            include 'view/listUsers.php';
        } else if (isset($_GET['viewCategorie'])){
            include 'controller/controllerGet.php';
            include 'view/viewCategorie.php';
        } else if (isset($_GET['viewItems'])){
            include 'controller/controllerGet.php';
            include 'view/viewItems.php';
        } else {
            include 'controller/controllerGet.php';
            include 'view/home.php';
        }
    ?>
    </body>
</html>