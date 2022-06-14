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
<!---FORM CONNEXION----->
<form class="formUser formLog" method="POST">
    <h1>Se connecter</h1>
    <div class="social-media">
      <p><i class="fab fa-google"></i></p>
      <p><i class="fab fa-youtube"></i></p>
      <p><i class="fab fa-facebook-f"></i></p>
      <p><i class="fab fa-twitter"></i></p>
    </div>
    <p class="choose-email">ou utiliser mon adresse e-mail :</p>
    <div class="inputs">
      <input type="email" placeholder="Email" name="mail" />
      <input type="password" placeholder="Mot de passe" name="mdp">
    </div>
    <p class="inscription">Je n'ai pas de <span>compte</span>. Je m'en <a href="index.php?inscription"><span>crée</span></a> un.</p>
    <div align="center">
        <?php 
          if (isset($errorLogForm)){?>
             <p class="ecoForm"> <?= $errorLogForm; ?> </p>
        <?php  } ?>
      <button type="submit" name="submit">Se connecter</button>
    </div>
  </form>
  <?php  }
   ?>