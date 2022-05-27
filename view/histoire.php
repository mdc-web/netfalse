<h2>histoire</h2>

<?php 

    if(!empty($histoire)){
        foreach($histoire as $classCategorie ){
?>
            <div class="item item1">
                <p class="paraItem"><?= $classCategorie->titre ?></p>
                <a class="lienItem" href="index.php?viewItems&idItem=<?= $classCategorie->id ?>"><img src="./upload/<?= $classCategorie->nom ?>" width="150px" ></a>
            </div>

            <?php
        } } ?>