<!------section by netfalse------>
<h1>Selection By Netfalse</h1>

<div class="containerProduct">
    <?php 

        
        if(!empty($itemR)){
            foreach($itemR as $classItem ){
    ?>

            <div class="product">

                <div class="description">
                    <?= $classItem->titre ?><br>
                    <?= $classItem->categorie ?><br>
                </div>
                <div class="img">
                    <a class="imgL" href="index.php?viewItems&idItem=<?= $classItem->id ?>"><img src="./upload/<?= $classItem->nom ?>" width="150px" ></a>
                </div>
            </div>

           <?php }
        } ?>


    </div>
    <!------section categorie------>
<h1>categorie</h1>
<h2>Action</h2>
<div class="containerProduct">
    <?php 

        
        if(!empty($action)){
            foreach($action as $classCategorie ){
    ?>

            <div class="product">

                <div class="description">
                    <?= $classCategorie->titre ?><br>
                    <?= $classCategorie->categorie ?><br>
                </div>
                <div class="img">
                    <a href="index.php?viewItems&idItem=<?= $classCategorie->id ?>"><img src="./upload/<?= $classCategorie->nom ?>" width="150px" ></a>
                </div>
            </div>

           <?php }
        } ?>


</div>

<h2>Histoire</h2>
<div class="containerProduct">
    <?php 

        
        if(!empty($histoire)){
            foreach($histoire as $classCategorie ){
    ?>

            <div class="product">

                <div class="description">
                    <?= $classCategorie->titre ?><br>
                    <?= $classCategorie->categorie ?><br>
                </div>
                <div class="img">
                    <a href="index.php?viewItems&idItem=<?= $classCategorie->id ?>"><img src="./upload/<?= $classCategorie->nom ?>" width="150px" ></a>
                </div>
            </div>

           <?php }
        } ?>


</div>

<h2>Syfy</h2>
<div class="containerProduct">
    <?php 

        
        if(!empty($syfy)){
            foreach($syfy as $classCategorie ){
    ?>

            <div class="product">

                <div class="description">
                    <?= $classCategorie->titre ?><br>
                    <?= $classCategorie->categorie ?><br>
                </div>
                <div class="img">
                    <a href="index.php?viewItems&idItem=<?= $classCategorie->id ?>"><img src="./upload/<?= $classCategorie->nom ?>" width="150px" ></a>
                </div>
            </div>

           <?php }
        } ?>


</div>

<h2>Anime</h2>
<div class="containerProduct">
    <?php 

        
        if(!empty($anime)){
            foreach($anime as $classCategorie ){
    ?>

            <div class="product">

                <div class="description">
                    <?= $classCategorie->titre ?><br>
                    <?= $classCategorie->categorie ?><br>
                </div>
                <div class="img">
                    <a href="index.php?viewItems&idItem=<?= $classCategorie->id ?>"><img src="./upload/<?= $classCategorie->nom ?>" width="150px" ></a>
                </div>
            </div>

           <?php }
        } ?>


</div>