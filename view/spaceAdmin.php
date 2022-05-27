<?php
if(isset($_SESSION['id']) &&  $_SESSION['role'] === "admin" ){
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

<h1 align="center">Espace admin</h1>
    
    <div align="center">
        <a href="index.php?listItems"><button>liste series</button></a>
        <a href="index.php?listUsers"><button>liste utilisateurs</button></a>
    </div>

    <?php }}else{
        echo"acces refuser";
    }?>

