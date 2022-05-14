<h1><?= $classUser->mail ?></h1>


<div class="containerViewUser">
    <!--div pour avatar
    <div>
        <img src="./upload/" width="350px" >
    </div>
    -->
    <div class="vieuwDesc">
        <strong><p class="viewP"><?= $classUser->mail ?></p></strong>
    </div>
</div>
<?php

    if (isset($_SESSION['role']) && $_SESSION['role'] === 'membre'){
    ?> 
        <form method="POST" enctype="multipart/form-data">

            <label for="file">Email</label>
            <input type="text" name="mail"><br>

            <label for="file">Mot de passe</label>
            <input type="text" name="mdp"><br>

            <button type="submit" name="submitModif"value="<?= $user->id?>">Modifier</button>

            <button type="submit" name="submitDelet"value="<?= $user->id?>">supprimer</button>
        </form>

    <?php
    }
    ?>