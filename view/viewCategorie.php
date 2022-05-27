<?php
 if(isset($searchV) && !empty($searchV)){
                    foreach($searchV as $searchItem) { ?>

                <div class="product">

                    <div class="titleListItem">
                        <?= $searchItem->titre ?><br>
                    </div>
                    <div class="img">
                        <a href="index.php?viewItems&idItem=<?= $searchItem->id ?>"><img src="./upload/<?= $searchItem->nom ?>" width="150px" ></a>
                    </div>
                </div>

                <?php }
                }else{ ?>

    <!------section categorie------>
    <div class="containerCategorieGrid">
        <div>
            <h2>Action</h2>
            <a href="index.php?action"><img class="imgCategorie" src="./assets/media/categorieaction1.jpg" alt=""></a>
        </div>
        <div>
            <h2>Histoire</h2>
            <a href="index.php?histoire"><img class="imgCategorie" src="./assets/media/categoriehistoire1.jpg" alt=""></a>
        </div><div>
            <h2>Syfy</h2>
            <a href="index.php?syfy"><img class="imgCategorie" src="./assets/media/categoriesyfy1.jpg" alt=""></a>
        </div><div>
            <h2>Animé</h2>
            <a href="index.php?anime"><img class="imgCategorie" src="./assets/media/categorieanime1.jpg" alt=""></a>
        </div>
    </div>


<?php  } ?>