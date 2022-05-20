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

<form class="formUser" method="POST" enctype="multipart/form-data">
    <h1>Créer un compte</h1>
    <div class="social-media">
      <p><i class="fab fa-google"></i></p>
      <p><i class="fab fa-youtube"></i></p>
      <p><i class="fab fa-facebook-f"></i></p>
      <p><i class="fab fa-twitter"></i></p>
    </div>
    <p class="choose-email">ou utiliser mon adresse e-mail :</p>
    
    <div class="inputs">
      <input type="email" placeholder="Email" name="mail" />
      <input type="text" placeholder="pseudo" name="pseudo" />
      <input type="password" placeholder="Mot de passe" name="mdp">
      <input type="file" name="fileAvatar"><br>
    </div>
    
    <div align="center">
      <button type="submit" name="submit">créer compte</button>
    </div>
  </form>

              <?php  } ?>