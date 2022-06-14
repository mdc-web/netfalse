<?php //CONDITION DE RECHERCHE
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
    <!------SECTION CATEGORIE------>
    <div class="containerCategorieGrid">
        <div>
            <a href="index.php?action"><h2 class="titleCategorie">Action</h2></a>
            <a href="index.php?action"><img class="imgCategorie" src="./assets/media/categorieaction1.jpg" alt=""></a>
        </div>
        <div>
            <a href="index.php?histoire"><h2 class="titleCategorie">Histoire</h2></a>
            <a href="index.php?histoire"><img class="imgCategorie" src="./assets/media/categoriehistoire1.jpg" alt=""></a>
        </div><div>
            <a href="index.php?syfy"><h2 class="titleCategorie">Syfy</h2></a>
            <a href="index.php?syfy"><img class="imgCategorie" src="./assets/media/categoriesyfy1.jpg" alt=""></a>
        </div><div>
            <a href="index.php?anime"><h2 class="titleCategorie">Animé</h2></a>
            <a href="index.php?anime"><img class="imgCategorie" src="./assets/media/categorieanime1.jpg" alt=""></a>
        </div>
    </div>
<?php  } ?>