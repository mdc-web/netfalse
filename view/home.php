<!------CONDITION DE RECHERCHE------>
<?php
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

<!------SECTION NETFALSE------>
<!------SLIDER------>
<h1 class="title1Home">Populaires sur Netfalse</h1>
<div class="swiper mySwiper">
    <div class="swiper-wrapper">
<?php
    if(!empty($itemR)){
                foreach($itemR as $classItem ){
        ?>
                <div class="swiper-slide">
                    <a class="imgL" href="index.php?viewItems&idItem=<?= $classItem->id ?>"><img src="./upload/<?= $classItem->nom ?>"></a>
                </div>
            <?php } 
   }  ?>
    </div>
    <div class="swiper-pagination"></div>
</div>
<!------SECTION CATEGORIE GRID DUPLIQUÉ------>
<a href="index.php?viewCategorie"><h1 class="title1Home">Categorie</h1></a>
<h2 class="title2Home"><a href="index.php?action">Action</a></h2>
<div class="grid-itemCategorie">
    <div class="items">
    <?php 
        if(!empty($action)){
            foreach($action as $classCategorie ){
        ?>      
                <div class="item">
                    <p class="paraItem"><?= $classCategorie->titre ?></p>
                    <a class="lienItem" href="index.php?viewItems&idItem=<?= $classCategorie->id ?>"><img src="./upload/<?= $classCategorie->nom ?>" class="imgSectionCategorie" ></a>
                </div>
            <?php }
        } ?>
    </div> 
</div>

<h2 class="title2Home"><a href="index.php?histoire">Histoire</a></h2>
<div class="grid-itemCategorie">
    <div class="items">
<?php 
    if(!empty($histoire)){
        foreach($histoire as $classCategorie ){
    ?>      
            <div class="item">
                <p class="paraItem"><?= $classCategorie->titre ?></p>
                <a class="lienItem" href="index.php?viewItems&idItem=<?= $classCategorie->id ?>"><img src="./upload/<?= $classCategorie->nom ?>" class="imgSectionCategorie" ></a>
            </div>
          <?php }
    } ?>
    </div>
</div>

<h2 class="title2Home"><a href="index.php?syfy">syfy</a></h2>
<div class="grid-itemCategorie">
    <div class="items">
<?php 
    if(!empty($syfy)){
        foreach($syfy as $classCategorie ){
    ?>
            <div class="item item1">
                <p class="paraItem"><?= $classCategorie->titre ?></p>
                <a class="lienItem" href="index.php?viewItems&idItem=<?= $classCategorie->id ?>"><img src="./upload/<?= $classCategorie->nom ?>" class="imgSectionCategorie"></a>
            </div>
    <?php }
    } ?>
    </div>
</div>

<h2 class="title2Home"><a href="index.php?anime">animé</a></h2>
<div class="grid-itemCategorie">
    <div class="items">
<?php 
    if(!empty($anime)){
        foreach($anime as $classCategorie ){
    ?>
            <div class="item item1">
                <p class="paraItem"><?= $classCategorie->titre ?></p>
                <a class="lienItem" href="index.php?viewItems&idItem=<?= $classCategorie->id ?>"><img src="./upload/<?= $classCategorie->nom ?>" class="imgSectionCategorie"></a>
            </div>
    <?php }
    } ?>
    </div>
</div>

<?php  } ?>


