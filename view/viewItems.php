<h1><?= $itemId->titre ?></h1>


<div class="containerViewItem">

    <div>
        <img src="./upload/<?= $itemId->nom ?>" width="350px" >
    </div>
    <div class="vieuwDesc">
        <strong><p class="viewP"><?= $itemId->titre ?></p></strong>
        <p class="viewP">Categorie: <?= $itemId->categorie ?></p>
        <p class="viewP">Durée: <?= $itemId->duration ?>mn</p>
        <p class="viewP">description: <?= $itemId->description ?></p><br>
        <p class="viewP"><?= round($noteV->moyenne) ?>
        <div class="stars">
            <i class="lar la-star" data-value="<?=$noteV->moyenne?>"></i><i class="lar la-star" data-value=""></i><i class="lar la-star" data-value=""></i><i class="lar la-star" data-value=""></i><i class="lar la-star" data-value=""></i>
        </div>
        <?php
            if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin' || isset($_SESSION['role']) && $_SESSION['role'] === 'membre'){?>
            <form method="POST">
                <div class="stars">
                    <i class="lar la-star" data-value="1"></i><i class="lar la-star" data-value="2"></i><i class="lar la-star" data-value="3"></i><i class="lar la-star" data-value="4"></i><i class="lar la-star" data-value="5"></i>
                </div>
                <input type="hidden" name="note" id="note" value="0">
                <button type="submit" name="submitNote">Valider</button>
            </form>
        <?php } ?>
    </div>
</div>
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
    ?>