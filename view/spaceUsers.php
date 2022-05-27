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



<div class="containerViewUser">
    <div>
        <img class="avatar" src="./avatar/<?= $classUser->avatar ?>" width="350px" >
    </div>
    
    <div class="vieuwDescUser">
        <p class="viewP"><strong>Pseudo:</strong> <?= $classUser->pseudo ?></p>
        <p class="viewP"><strong>Adresse email:</strong> <?= $classUser->mail ?></p>
    </div>
</div>
<?php

    if (isset($_SESSION['role']) && $_SESSION['role'] === 'membre'){
    ?> 

    <form class="formUser"method="POST" enctype="multipart/form-data">
        <h1>Modifier mes infos</h1>
        <div class="inputs">
            <input type="email" value="<?= $classUser->mail?>" name="mail" />
            <input type="text" value="<?= $classUser->pseudo?>" name="pseudo" />
            <label>Avatar</label>
            <input type="file" name="fileAvatars" /><br>
        </div>
        
        <div align="center">
            <button type="submit" name="submitModifUser" value="<?= $user->id?>">Modifier</button>
            <button type="submit" name="submitDelet" value="<?= $user->id?>">supprimer</button>
        </div>
    </form>

    <?php
    }
}
    ?>