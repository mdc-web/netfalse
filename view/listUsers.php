<h1>Liste Utilisateurs</h1>
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
            <form method="POST">
              <button type="submit" name="submitDeletByAdmin" value="<?= $classUser->id ?>">supprimer</button>
            </form>
          </td>
        </tr>
      </tbody>

  <?php
    }
  }
  ?>
</table>