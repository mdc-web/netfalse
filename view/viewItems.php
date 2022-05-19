<div class="containerViewItem">

    <div>
        <img class="viewImg" src="./upload/<?= $itemId->nom ?>" width="350px" >
    </div>
    <div class="viewDesc">
        <strong><h2 class="viewP"><?= $itemId->titre ?></h2></strong>
        <p class="viewP"><strong>Categorie:</strong> <?= $itemId->categorie ?></p>
        <p class="viewP"><strong>Durée:</strong> <?= $itemId->duration ?>mn</p>
        <p class="viewP"><strong>description:</strong> <?= $itemId->description ?></p><br>
        <div class="stars" id="fixe">
            <!-- <i class="lar la-star fixe"  value=""></i><i class="lar la-star" data-value="2" value="<?= $noteV->moyenne ?>"></i><i class="lar la-star" data-value=""></i><i class="lar la-star" data-value=""></i><i class="lar la-star" data-value=""></i> -->
        </div>
        <p class="viewP"><?= round($noteV->moyenne) ?></p>
        <?php
            if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin' || isset($_SESSION['role']) && $_SESSION['role'] === 'membre'){?>
            <form method="POST">
                <div class="stars">
                    <i class="lar la-star" name="stars" data-value="1"></i><i class="lar la-star" name="stars" data-value="2"></i><i class="lar la-star" name="stars" data-value="3"></i><i class="lar la-star" name="stars" data-value="4"></i><i class="lar la-star" name="stars" data-value="5"></i>
                </div>
                <input type="hidden" name="note" id="note" value="0">
                <button type="submit" name="submitNote">Valider</button>
            </form>
        <?php } ?>
    </div>
</div>
<?php

    if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin'){
    ?> 
        <form class="formUser" method="POST" enctype="multipart/form-data">
        <div class="inputs">
            <input type="text" name="titre" value="<?= $itemId->titre?>"><br>

            <input type="radio" name="categorie" value="action">Action
            <input type="radio" name="categorie" value="histoire">Histoire
            <input type="radio" name="categorie" value="syfy">Syfy
            <input type="radio" name="categorie" value="anime">Animé<br>

            <label for="file">duration</label>
            <input type="number" name="duration" value="<?= $itemId->duration?>"><br>

            <label for="file">description</label>
            <textarea name="description"><?= $itemId->description?>Description ...</textarea><br>

            <label for="file">Fichier</label>
            <input type="file" name="file" value="<?= $itemId->name?>"><br><br>
        </div>
        <div align="center">

            <button type="submit" name="submitModif" value="<?= $itemId->id?>">Modifier</button>

            <button type="submit" name="submitDelet" value="<?= $itemId->id?>">supprimer</button>
        </div>
        </form>

    <?php
    }
    ?>

<script>
 var variableRecuperee = <?php echo json_encode($noteV); ?>;
</script>
    