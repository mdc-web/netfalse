
    <h2>Ajouter une serie</h2>
    <form method="POST" enctype="multipart/form-data">

        <label for="file">Titre</label>
        <input type="text" name="titre"><br>

        <input type="radio" name="categorie" value="action">Action<br>
        <input type="radio" name="categorie" value="histoire">Histoire<br>
        <input type="radio" name="categorie" value="syfy">Syfy<br>
        <input type="radio" name="categorie" value="anime">Animé<br>

        <label for="file">duration</label>
        <input type="number" name="duration"><br>

        <label for="file">description</label>
        <textarea name="description">Description ...</textarea><br>

        <label for="file">Fichier</label>
        <input type="file" name="file"><br><br>

        <button type="submit" name="submit">Enregistrer</button>
    </form>
    <h2>Serie</h2>
    
    <div class="containerProduct">
    <?php 

        
        if(!empty($item)){
            foreach($item as $classItem ){
    ?>

            <div class="product">

                <div class="description">
                    <?= $classItem->titre ?><br>
                    <?= $classItem->categorie ?><br>
                </div>
                <div class="img">
                    <a href="index.php?viewItems&idItem=<?= $classItem->id ?>"><img src="./upload/<?= $classItem->nom ?>" width="150px" ></a>
                </div>
            </div>

           <?php }
        } ?>


    </div>
</body>
</html>