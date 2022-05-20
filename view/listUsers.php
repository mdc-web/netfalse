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

  <h1 class="titleListUsers">Liste Utilisateurs</h1>
  <table>
  
    <thead>
      <tr>
        <th>id</th>
        <th>email</th>
        <th>action</th>
      </tr>
    </thead>
    <?php
    //var_dump($user);
    if (!empty($listUser)) {
      foreach ($listUser as $classUser) {


    ?>
        <tbody>
          <tr>
            <td><?= $classUser->id ?></td>
            <td><?= $classUser->mail ?></td>
            <td>
              <form class="formDelUser" method="POST">
                <button class="btndeladmin" type="submit" name="submitDeletByAdmin" value="<?= $classUser->id ?>">supprimer</button>
              </form>
            </td>
          </tr>
        </tbody>

    <?php
      }
    }
    ?>
  </table>

  <?php } ?>