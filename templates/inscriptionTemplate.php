<div class="connexion">

<h2>Connexion</h2>
  <?php
    if(isset($conErrorText))
    echo 'erreur : <span class="error">' . $conErrorText . '</span>';
  ?>
  <form action="index.php?action=validateConnexion" method="post">
  <table>
  <tr>
  <th>Login ou adresse mail :</th>
  <td><input type="text" name="conLogin"/></td>
  </tr>
  <tr>
  <th>Mot de passe* :</th>
  <td><input type="password" name="conPassword"/></td>
  </tr>
  <tr>
  <th />
  <td><input type="submit" value="Me connecter" /></td>
  </tr>
  </table>
</form>

</div>

<div class="inscription">

<h2>Inscription</h2>
  <?php
    if(isset($inscErrorText))
    echo 'erreur : <span class="error">' . $inscErrorText . '</span>';
  ?>
  <form action="index.php?action=validateInscription" method="post">
  <table>
  <tr>
  <th>Login* :</th>
  <td><input type="text" name="inscLogin"/></td>
  </tr>
  <tr>
  <th>Mot de passe* :</th>
  <td><input type="password" name="inscPassword"/></td>
  </tr>
  <tr>
  <th>Mail :</th>
  4
  <td><input type="text" name="mail"/></td>
  </tr>
  <tr>
  <th>Nom :</th>
  <td><input type="text" name="nom"/></td>
  </tr>
  <tr>
  <th>Prenom :</th>
  <td><input type="text" name="prenom"/></td>
  </tr>
  <tr>
  <th />
  <td><input type="submit" value="Creer mon compte..." /></td>
  </tr>
  </table>
</form>

</div>
