<h1>home</h1>

<?php 

        
        if(!empty($item)){
            foreach($item as $classItem ){

?>
                <?= $classItem->titre ?>
                <?= $classItem->categorie ?>
                <?= $classItem->duration ?>
                <?= $classItem->description ?>
                <a href="index.php?viewItems&idItem=<?= $classItem->id?>"><img src="./upload/<?= $classItem->nom ?>" width="150px" ></a>


           <?php }
        }

    ?>
<h1>categorie</h1>
<h2>Action</h2>
<?php 

        
        if(!empty($action)){
            foreach($action as $classCategorie ){

?>
                <?= $classCategorie->titre ?>
                <?= $classCategorie->categorie ?>
                <?= $classCategorie->duration ?>
                <?= $classCategorie->description ?>
                <a href="index.php?viewItems&idItem=<?= $classCategorie->id?>"><img src="./upload/<?= $classCategorie->nom ?>" width="150px" ></a>


           <?php }
        }

    ?>

<h2>Histoire</h2>
<?php 

        
        if(!empty($histoire)){
            foreach($histoire as $classCategorie ){

?>
                <?= $classCategorie->titre ?>
                <?= $classCategorie->categorie ?>
                <?= $classCategorie->duration ?>
                <?= $classCategorie->description ?>
                <a href="index.php?viewItems&idItem=<?= $classCategorie->id?>"><img src="./upload/<?= $classCategorie->nom ?>" width="150px" ></a>


           <?php }
        }

    ?>

<h2>Syfy</h2>
<?php 

        
        if(!empty($syfy)){
            foreach($syfy as $classCategorie ){

?>
                <?= $classCategorie->titre ?>
                <?= $classCategorie->categorie ?>
                <?= $classCategorie->duration ?>
                <?= $classCategorie->description ?>
                <a href="index.php?viewItems&idItem=<?= $classCategorie->id?>"><img src="./upload/<?= $classCategorie->nom ?>" width="150px" ></a>


           <?php }
        }

    ?>

<h2>Anime</h2>
<?php 

        
        if(!empty($anime)){
            foreach($anime as $classCategorie ){

?>
                <?= $classCategorie->titre ?>
                <?= $classCategorie->categorie ?>
                <?= $classCategorie->duration ?>
                <?= $classCategorie->description ?>
                <a href="index.php?viewItems&idItem=<?= $classCategorie->id?>"><img src="./upload/<?= $classCategorie->nom ?>" width="150px" ></a>


           <?php }
        }

    ?>