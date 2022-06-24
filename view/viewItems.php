<?php //CONDITION DE RECHERCHE
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
<!-------SINON AFFICHER LA PAGE------->
<!-------CONTAINER ITEMS------->
<div class="containerViewItem">
    <div class="containerImgItem">
        <img class="viewImg" src="./upload/<?= $itemId->nom ?>">
    </div>
    <div class="viewDesc">
        <strong><h2 class="viewP"><?= $itemId->titre ?></h2></strong>
        <p class="viewP"><strong>Categorie:</strong> <?= $itemId->categorie ?></p>
        <p class="viewP"><strong>Durée:</strong> <?= $itemId->duration ?>mn</p>
        <p class="viewP"><strong>description:</strong> <?= $itemId->description ?></p><br>
        <div class="stars" id="fixe">
        </div><br>
        <?php //CONDITION POUR ATRIBUER UNE NOTE
            if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin' || isset($_SESSION['role']) && $_SESSION['role'] === 'membre'){?>
            <p class="viewP">Noter cette serie</p>
            <form method="POST">
                <div class="stars">
                    <i class="lar la-star" name="stars" data-value="1"></i><i class="lar la-star" name="stars" data-value="2"></i><i class="lar la-star" name="stars" data-value="3"></i><i class="lar la-star" name="stars" data-value="4"></i><i class="lar la-star" name="stars" data-value="5"></i>
                </div>
                <input type="hidden" name="note" id="note" value="0">
                <button class="btnNote" type="submit" name="submitNote">Valider</button>
            </form>
        <?php } ?>
    </div>
</div>
<?php
    //CONDITION POUR MODIFIER L'ITEM PAR L'ADMIN
    if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin'){
    ?> 
        <form class="formUser" method="POST" enctype="multipart/form-data">
        <div class="inputs">
            <input type="text" name="titre" value="<?= $itemId->titre?>"><br>
            <label for="file">duration</label>
            <input type="number" name="duration" value="<?= $itemId->duration?>"><br>
            <label for="file">description</label>
            <textarea name="description"><?= $itemId->description?></textarea><br>
            <label for="file">Fichier</label>
            <input type="file" name="file" value="<?= $itemId->name?>"><br><br>
        </div>
        <div class="radio">
        <input type="radio" name="categorie" value="action">Action
            <input type="radio" name="categorie" value="histoire">Histoire
            <input type="radio" name="categorie" value="syfy">Syfy
            <input type="radio" name="categorie" value="anime">Animé<br>
        </div>
        <div align="center">
            <button type="submit" name="submitModif" value="<?= $itemId->id?>">Modifier</button>

            <button type="submit" name="submitDelet" value="<?= $itemId->id?>">supprimer</button>
        </div>
        </form>
    <?php
    }
}
    ?>
<?php 
// GESTION DE LA NOTE MOYENNE
round($noteV->moyenne) ?>
<script>
 var variableRecuperee = <?php echo json_encode($noteV); ?>;
</script>