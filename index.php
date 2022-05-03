<?php

include 'model/config.php';
include 'model/connexionDb.php';
include 'model/items.php';
include 'controller/controllerItems.php';
include 'controller/controllerGet.php';

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>

    </head>
<body>
    <h2>Ajouter une image</h2>
    <form method="POST" enctype="multipart/form-data">

        <label for="file">Titre</label>
        <input type="text" name="titre"><br>

        <input type="radio" name="categorie" value="action">Action<br>
        <input type="radio" name="categorie" value="histoire">Histoire<br>
        <input type="radio" name="categorie" value="syfy">Syfy<br>
        <input type="radio" name="categorie" value="syfy">Animé<br>

        <label for="file">duration</label>
        <input type="number" name="duration"><br>

        <label for="file">description</label>
        <textarea name="description">Description ...</textarea><br>

        <label for="file">Fichier</label>
        <input type="file" name="file"><br><br>

        <button type="submit" name="submit">Enregistrer</button>
    </form>
    <h2>Mes images</h2>
    <?php 


        if(!empty($item)){
            foreach($item as $classItem ){
                echo $classItem -> titre.$classItem -> categorie.$classItem -> duration.$classItem -> description."<img src='./upload/".$classItem -> nom."' width='150px' ><br>";
            }
        }
    ?>
</body>
</html>