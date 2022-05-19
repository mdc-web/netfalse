<h1 class="titleSpaceUser"><?= $classUser->mail ?></h1>


<div class="containerViewUser">
    <div>
        <!--<img class="avatar" src="./assets/media/fff.jpg" width="350px">-->
        <img class="avatar" src="./avatar/<?= $classUser->avatar ?>" width="350px" >
    </div>
    
    <div class="vieuwDescUser">
        <p class="viewP">Code utilisateur: <?= $classUser->id ?></p>
        <p class="viewP">Pseudo: <?= $classUser->pseudo ?></p>
        <p class="viewP">Adresse email: <?= $classUser->mail ?></p>
    </div>
</div>
<?php

    if (isset($_SESSION['role']) && $_SESSION['role'] === 'membre'){
    ?> 

    <form method="POST" enctype="multipart/form-data">
        <h1>Modifier mes infos</h1>
        <div class="inputs">
            <input type="email" value="<?= $classUser->mail?>" name="mail" />
            <input type="text" value="<?= $classUser->pseudo?>" name="pseudo" />
            <input type="file" name="fileAvatars" /><br>
        </div>
        
        <div align="center">
            <button type="submit" name="submitModif" value="<?= $user->id?>">Modifier</button>
            <button type="submit" name="submitDelet" value="<?= $user->id?>">supprimer</button>
        </div>
    </form>

    <?php
    }
    ?>