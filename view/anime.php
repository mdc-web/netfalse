<h2>animé</h2>

<?php 

    if(!empty($anime)){
        foreach($anime as $classCategorie ){
?>
            <div class="item item1">
                <p class="paraItem"><?= $classCategorie->titre ?></p>
                <a class="lienItem" href="index.php?viewItems&idItem=<?= $classCategorie->id ?>"><img src="./upload/<?= $classCategorie->nom ?>" width="150px" ></a>
            </div>

            <?php
        } } ?>