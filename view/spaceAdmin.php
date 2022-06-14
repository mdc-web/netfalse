<?php
//SECURITE ACCES SPACEADMIN
if(isset($_SESSION['id']) &&  $_SESSION['role'] === "admin" ){
    if(isset($searchV) && !empty($searchV)){ 
//CONDITION DE RECHERCHE
//BOUCLE DANS UNE DIV POUR AFFICHER LE RETOUR D UNE FONCTION STOCKÉ DANS LA VARIABLE DEFINIE DANS LE CONTROLEUR    
    ?>
        <div class="gridItemsResp"> <?php
            foreach($searchV as $searchItem) { ?>

                <div class="itemCategorie">
                    <p class="paraItem"><?= $searchItem->titre ?></p>
                    <a class="lienItem" href="index.php?viewItems&idItem=<?= $searchItem->id ?>"><img src="./upload/<?= $searchItem->nom ?>" width="150px" ></a>
                </div>
            <?php } ?>
        </div>
<?php } else { ?> 
<h1 align="center">Espace admin</h1>
    <div class="containerBtnAdmin">
        <a href="index.php?listItems"><button>liste series</button></a>
        <a href="index.php?listUsers"><button>liste utilisateurs</button></a>
    </div>
    <?php }}else{
        header('location:index.php?home');
    }?>

