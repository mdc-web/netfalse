<?php
if(isset($_SESSION['id']) &&  $_SESSION['role'] === "admin" ){
//CONDITION DE RECHERCHE
//BOUCLE DANS UNE DIV POUR AFFICHER LE RETOUR D UNE FONCTION STOCKÉ DANS LA VARIABLE DEFINIE DANS LE CONTROLEUR
 if(isset($searchV) && !empty($searchV)){ ?>
    <div class="gridItemsResp"> <?php
        foreach($searchV as $searchItem) { ?>

            <div class="itemCategorie">
                <p class="paraItem"><?= $searchItem->titre ?></p>
                <a class="lienItem" href="index.php?viewItems&idItem=<?= $searchItem->id ?>"><img src="./upload/<?= $searchItem->nom ?>" width="150px" ></a>
            </div>
        <?php } ?>
    </div>
<?php } else { ?> 
    <h2 class="titleListItem">Ajouter une serie</h2>
    <form method="POST" class="formUser" enctype="multipart/form-data">
        <div class="inputs">
            <input type="text" name="titre" placeholder="titre"><br>
            <input type="number" name="duration" placeholder="duration"><br>
            <textarea name="description" placeholder="description" type="textarea"></textarea><br>
            <input type="file" name="file"><br><br>
        </div>
        <div class="radio">
            <input type="radio" name="categorie" value="action">Action
            <input type="radio" name="categorie" value="histoire">Histoire
            <input type="radio" name="categorie" value="syfy">Syfy
            <input type="radio" name="categorie" value="anime">Animé<br><br><br>
        </div>
        <div align="center">
            <button type="submit" name="submit">Ajouter</button>
        </div>
    </form>
    <h2 class="titleListItem">Serie</h2>
    <div class="gridItemsResp">
    <?php 
        if(!empty($item)){
            foreach($item as $classItem ){
    ?>
            <div class="itemCategorie">
                <p class="paraItem"><?= $classItem->titre ?></p>
                <a class="lienItem" href="index.php?viewItems&idItem=<?= $classItem->id ?>"><img src="./upload/<?= $classItem->nom ?>" width="150px" ></a>
            </div>
            <?php }
        } ?>
    </div>
    <?php } 
    }else{
        header('location:index.php?home');
    } ?>