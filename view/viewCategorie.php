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

<h1>categorie</h1>
<h2>Action</h2>
<div class="containerListItem">
    <?php 

        
        if(!empty($action)){
            foreach($action as $classCategorie ){
    ?>

            <div class="product">

                <div class="description">
                    <strong><?= $classCategorie->titre ?></strong><br><br>
                </div>
                <div class="img">
                    <a href="index.php?viewItems&idItem=<?= $classCategorie->id ?>"><img src="./upload/<?= $classCategorie->nom ?>" width="150px" ></a>
                </div>
            </div>

           <?php }
        } ?>


    </div>

<h2>Histoire</h2>
<div class="containerListItem">
    <?php 

        
        if(!empty($histoire)){
            foreach($histoire as $classCategorie ){
    ?>

            <div class="product">

                <div class="description">
                    <strong><?= $classCategorie->titre ?></strong><br><br>
                </div>
                <div class="img">
                    <a href="index.php?viewItems&idItem=<?= $classCategorie->id ?>"><img src="./upload/<?= $classCategorie->nom ?>" width="150px" ></a>
                </div>
            </div>

           <?php }
        } ?>


    </div>

<h2>Syfy</h2>
<div class="containerListItem">
    <?php 

        
        if(!empty($syfy)){
            foreach($syfy as $classCategorie ){
    ?>

            <div class="product">

                <div class="description">
                    <strong><?= $classCategorie->titre ?></strong><br><br>
                </div>
                <div class="img">
                    <a href="index.php?viewItems&idItem=<?= $classCategorie->id ?>"><img src="./upload/<?= $classCategorie->nom ?>" width="150px" ></a>
                </div>
            </div>

           <?php }
        } ?>


    </div>

<h2>Anime</h2>
<div class="containerListItem">
    <?php 

        
        if(!empty($anime)){
            foreach($anime as $classCategorie ){
    ?>

            <div class="product">

                <div class="description">
                    <strong><?= $classCategorie->titre ?></strong><br><br>
                </div>
                <div class="img">
                    <a href="index.php?viewItems&idItem=<?= $classCategorie->id ?>"><img src="./upload/<?= $classCategorie->nom ?>" width="150px" ></a>
                </div>
            </div>

           <?php }
        } ?>


    </div>

<?php } ?>