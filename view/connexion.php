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

<form class="formUser" method="POST">
     
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
          if (isset($test)){?>
             <p class="ecoForm"> <?= $test; ?> </p>
        <?php  } ?>
      <button type="submit" name="submit">Se connecter</button>
    </div>
  </form>

  <?php  } ?>