<?php

include 'model/config.php';
include 'model/connexionDb.php';
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
                <a href="index.php?login">Login</a>
                <a href="index.php?spaceAdmin">Espace admin</a>
                <a href="index.php?viewCategorie">categorie</a>
            </div>
        </nav>


    <?php
        if (isset($_GET['spaceAdmin'])) {
        
            include 'view/spaceAdmin.php';
        } else if (isset($_GET['login'])){
            include 'view/login.php';
        } else if (isset($_GET['spaceAdmin'])){
            include 'view/spaceAdmin.php';
        } else if (isset($_GET['viewCategorie'])){
            include 'view/viewCategorie.php';
        } else if (isset($_GET['listItems'])){
            include 'controller/controllerItems.php';
            include 'controller/controllerGet.php';
            include 'view/listItems.php';
        } else if (isset($_GET['listUsers'])){
            include 'view/listUsers.php';
            
        } else {
            include 'view/home.php';
        }
    ?>
    </body>
</html>