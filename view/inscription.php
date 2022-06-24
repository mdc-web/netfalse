<?php
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
<?php } else { ?>
<!---AFFICHAGE DE LA PAGE SI AUCUNE RECHERCHE----->
<!---FORM INSCRIPTION----->
<form class="formUser formLog" method="POST" enctype="multipart/form-data">
  <h1>Créer un compte</h1>
  <div class="social-media">
    <p><i class="fab fa-google"></i></p>
    <p><i class="fab fa-youtube"></i></p>
    <p><i class="fab fa-facebook-f"></i></p>
    <p><i class="fab fa-twitter"></i></p>
  </div>
  <p class="choose-email">ou utiliser mon adresse e-mail :</p>
  <div class="inputs">
    <input type="email" placeholder="Email" name="mail" required size="50" maxlength="50" />
    <input type="text" placeholder="pseudo" name="pseudo" required size="20" maxlength="20" />
    <input type="password" placeholder="Mot de passe" name="mdp">
    <input type="file" name="fileAvatar"><br>
  </div>
  <div align="center">
  <?php 
          if (isset($errorLogForm)){?>
             <p class="ecoForm"> <?= $errorLogForm; ?> </p>
        <?php  } ?>
    <button type="submit" name="submit">créer compte</button>
  </div>
</form>
              <?php  } 
               ?>