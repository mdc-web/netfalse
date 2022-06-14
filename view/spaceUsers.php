<?php  //SECURITE ACCES SPACEUSERS
if(isset($_SESSION['id']) &&  $_SESSION['role'] === "membre" ){
//CONDITION DE RECHERCHE
//BOUCLE DANS UNE DIV POUR AFFICHER LE RETOUR D UNE FONCTION STOCKÉ DANS LA VARIABLE DEFINIE DANS LE CONTROLEUR
    if(isset($searchV) && !empty($searchV)){ ?>
        <div class="gridItemsResp"> <?php
            foreach($searchV as $searchItem) { ?>

                <div class="itemCategorie">
                    <p class="paraItem"><?= $searchItem->titre ?></p>
                    <a class="lienItem" href="index.php?viewItems&idItem=<?= $searchItem->id ?>"><img src="./upload/<?= $searchItem->nom ?>" width="150px" ></a>
                </div>
            <?php } ?>
        </div>
<?php } else {
    ?> 
<!-------SINON AFFICHER LA PAGE------->
<div class="containerSpaceUsers">
<!-------CONTAINER DE LA VIEW PROFIL USERS------->
    <div class="containerViewUser">
        <div class="containerImgUsers">

            <?php if(empty($classUser->avatar)) { 
//CONDITION D'AFFICHAGE D'AVATAR PAR DEFAUT
                ?>
                <img class="avatar" src="./assets/media/avatar/default-avatar.jpg" width="350px" alt="" >
          <?php  } else { ?>
            <img class="avatar" src="./assets/media/avatar/<?= $classUser->avatar ?>" width="350px" >
            <?php } ?>
        </div>
        <div class="viewDescUser">
            <p class="vieuwDescUserP titleUsers"><strong><?= $classUser->pseudo ?><br></strong></p>
            <p class="vieuwDescUserP par"><strong>Pseudo:<br></strong> <?= $classUser->pseudo ?></p>
            <p class="vieuwDescUserP par"><strong>Adresse email:<br></strong> <?= $classUser->mail ?></p>
        </div>
    </div>
<!-----FORM MODIFIER PROFIL USERS------>
    <form class="formUser formUp"method="POST" enctype="multipart/form-data">
        <h1>Modifier mes infos</h1>
        <div class="inputs">
            <label>Email</label>
            <input type="email" value="<?= $classUser->mail?>" name="mail" />
            <label>Pseudo</label>
            <input type="text" value="<?= $classUser->pseudo?>" name="pseudo" />
            <label>Avatar</label>
            <input type="file" name="fileAvatars"/><br>
        </div>
        <div align="center">
            <button type="submit" name="submitModifUser" value="<?= $user->id?>">Modifier</button>
            <button type="submit" name="submitDelet" value="<?= $user->id?>">supprimer</button>
        </div>
    </form>
</div>
    <?php
   }
}else{
    header('location:index.php?home');
} 
    ?>