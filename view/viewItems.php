<h1>view item</h1>

<?= $itemId->titre ?>
<?= $itemId->categorie ?>
<?= $itemId->duration ?>
<?= $itemId->description ?>
<img src="./upload/<?= $itemId->nom ?>" width="150px" >

<?php

if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin'){
?> 
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

        <button type="submit" name="submitModif"value="<?= $classItem->id?>">Modifier</button>

        <button type="submit" name="submitDelet"value="<?= $classItem->id?>">supprimer</button>
</form>

<?php
}
