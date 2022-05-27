<!------VIEW RECHERCHE------>

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

<h1>Selection By Netfalse</h1>

<!------SECTION NETFALSE------>
<!------SLIDER------>

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

    <!------section categorie------>
<a href="index.php?viewCategorie"><h1>Categorie</h1></a>
<h2><a href="index.php?action">Action</a></h2>
<main class="grid-item main">


    <div class="items">
<?php 
    if(!empty($action)){
        foreach($action as $classCategorie ){
    ?>      
            <div class="item">
                <p class="paraItem"><?= $classCategorie->titre ?></p>
                <a class="lienItem" href="index.php?viewItems&idItem=<?= $classCategorie->id ?>"><img src="./upload/<?= $classCategorie->nom ?>" width="150px" ></a>
            </div>
          <?php }
    } ?>
    </div>
      
    
</main>

<h2><a href="index.php?histoire">histoire</a></h2>
<main class="grid-item main">


    <div class="items">
<?php 
    if(!empty($histoire)){
        foreach($histoire as $classCategorie ){
    ?>
            <div class="item item1">
                <p class="paraItem"><?= $classCategorie->titre ?></p>
                <a class="lienItem" href="index.php?viewItems&idItem=<?= $classCategorie->id ?>"><img src="./upload/<?= $classCategorie->nom ?>" width="150px" ></a>
            </div>
    <?php }
    } ?>
    </div>
      
    
</main>

<h2><a href="index.php?syfy">syfy</a></h2>
<main class="grid-item main">


    <div class="items">
<?php 
    if(!empty($syfy)){
        foreach($syfy as $classCategorie ){
    ?>
            <div class="item item1">
                <p class="paraItem"><?= $classCategorie->titre ?></p>
                <a class="lienItem" href="index.php?viewItems&idItem=<?= $classCategorie->id ?>"><img src="./upload/<?= $classCategorie->nom ?>" width="150px" ></a>
            </div>
    <?php }
    } ?>
    </div>
      
    
</main>

<h2><a href="index.php?anime">animé</a></h2>
<main class="grid-item main">


    <div class="items">
<?php 
    if(!empty($anime)){
        foreach($anime as $classCategorie ){
    ?>
            <div class="item item1">
                <p class="paraItem"><?= $classCategorie->titre ?></p>
                <a class="lienItem" href="index.php?viewItems&idItem=<?= $classCategorie->id ?>"><img src="./upload/<?= $classCategorie->nom ?>" width="150px" ></a>
            </div>
    <?php }
    } ?>
    </div>
      
    
</main>

<?php  } ?>


